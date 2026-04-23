<?php

namespace OfflineAgency\MongoAutoSync\Traits;

use DateTime;
use Exception;
use Illuminate\Support\Arr;
use MongoDB\BSON\UTCDateTime;
use OfflineAgency\MongoAutoSync\Extensions\MongoCollection;
use OfflineAgency\MongoAutoSync\Http\Models\MDModel;
use stdClass;

trait ModelAdditionalMethod
{
    protected $mini_models;

    public function newCollection(array $models = [])
    {
        return new MongoCollection($models);
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return array
     */
    public function getMongoRelation(): array
    {
        if (! empty($this->mongoRelation)) {
            return $this->mongoRelation;
        } else {
            return [];
        }
    }

    /**
     * @return void
     *
     * @throws Exception
     */
    public function setMiniModels()
    {
        $miniModelList = $this->getUniqueMiniModelList();
        $this->mini_models = $this->populateMiniModels($miniModelList);
    }

    /**
     * @return array
     */
    public function getMiniModels()
    {
        return $this->mini_models;
    }

    /**
     * @return array
     *
     * @throws Exception
     */
    public function getUniqueMiniModelList()
    {
        $relationships = $this->getMongoRelation();

        $models = [];
        $embedded_object = [];

        foreach ($relationships as $method => $relationship) {
            $hasTarget = hasTarget($relationship);
            if ($hasTarget) {
                $relationshipsContainsTarget = Arr::has($relationship, 'modelOnTarget');
                if ($relationshipsContainsTarget) {
                    $models[] = Arr::get($relationship, 'modelOnTarget');
                    $embedded_object[$method] = $this->getObjWithRefId($method, $relationship);
                } else {
                    throw new Exception('modelOnTarget not found on relationship '.$method.' array. Check your Model configuration '.get_class($this));
                }
            }
        }
        $this->setPartialGeneratedRequest($embedded_object);

        return collect($models)->unique()->toArray();
    }

    /**
     * @param  array  $miniModelList
     * @return mixed
     *
     * @throws Exception
     */
    public function populateMiniModels(array $miniModelList)
    {
        $miniModels = [];
        foreach ($miniModelList as $miniModel) {
            $miniModels[$miniModel] = $this->getFreshMiniModel($miniModel);
        }

        return $miniModels;
    }

    /**
     * @param  string  $mini_model_path
     * @return MDModel
     *
     * @throws Exception
     */
    public function getFreshMiniModel(string $mini_model_path)
    {
        $embededModel = $this->getModelInstanceFromPath($mini_model_path);
        $items = $embededModel->getItems();
        foreach ($items as $key => $item) {
            $embededModel->$key = $this->castValueToBeSaved($key, $item, $mini_model_path);
        }

        return $embededModel;
    }

    /**
     * @param  string  $key
     * @param  $item
     * @param  string  $mini_model_path
     * @return array|mixed|UTCDateTime|null
     *
     * @throws Exception
     */
    public function castValueToBeSaved(string $key, $item, string $mini_model_path)
    {
        $is_ML = isML($item);
        $is_MD = isMD($item);
        $is_array = is_array($item);
        $is_carbon_date = $this->isCarbonDate($item);

        $value = $this->getObjValueToBeSaved($key, $mini_model_path);
        if ($is_ML) {
            return is_array($value) ? $value : ml([], $value);
        } elseif ($is_MD) {
            if ($value instanceof UTCDateTime) {
                return $value;
            }

            if ($value == '') {
                return null;
            }

            return new UTCDateTime(new DateTime($value));
        } elseif ($is_carbon_date) {
            if ($value == '') {
                return new UTCDateTime();
            }

            return new UTCDateTime($value);
        } elseif ($is_array) {
            return is_null($value) ? [] : (is_array($value) ? $value : (is_object($value) ? $value->getAttributes() : (array) $value));
        } else {
            return $value;
        }
    }

    /**
     * @param  string  $mini_model_path
     * @return MDModel
     */
    public function getModelInstanceFromPath(string $mini_model_path)
    {
        return new $mini_model_path;
    }

    /**
     * @param  string  $key
     * @param  string  $mini_model_path
     * @param  bool  $rewrite_ref_id_key
     * @return mixed
     */
    public function getObjValueToBeSaved(string $key, string $mini_model_path, $rewrite_ref_id_key = true)
{
    $key = $key === 'ref_id' && $rewrite_ref_id_key ? '_id' : $key;
    $target_additional_data = $this->getTargetAdditionalData();
    $request = $this->getRequest();
    $db_value = $this->getDbValue($key);

    $result = Arr::has($target_additional_data, $mini_model_path.'.'.$key) ?
        Arr::get($target_additional_data, $mini_model_path.'.'.$key) :
        ($request->has($key) ? $request->input($key) : $db_value);

    return $result;
}

    /**
     * @param  string  $key
     * @return mixed
     */
    private function getDbValue(string $key)
{
    $value = $this->$key;
    if (is_array($value) && count($value) === 1 && array_key_exists(0, $value)) {
        return $value[0];
    }
    
    return $value;
}

    /**
     * @param  string  $key
     * @return array
     *
     * @throws Exception
     */
    public function getEmbedModel(string $key)
    {
        $embedModels = $this->getMiniModels();

        if (Arr::has($embedModels, $key)) {
            return Arr::get($embedModels, $key);
        } else {
            throw new Exception('I cannot find an embedded model with key: '.$key.'. Check on your model configuration');
        }
    }

    /**
     * @param  string  $method
     * @param  array  $relationship
     * @return false|string
     *
     * @throws Exception
     */
    public function getObjWithRefId(string $method, array $relationship)
    {
        $objs = [];
        $type = $relationship['type'];

        $is_EO = is_EO($type);
        $is_EM = is_EM($type);

        if ($is_EO) {
            $objs[] = $this->getObjValueToBeSaved($method, '', false);
        } elseif ($is_EM) {
            if (! is_null($this->$method) > 0) {
                foreach ($this->$method as $value) {
    if (is_array($value)) {
        $value = (object) $value;
    }
    $obj = new stdClass;
    $obj->ref_id = $value->ref_id;
    $objs[] = $obj;
}
            }
        } else {
            throw new Exception('Relationship '.$method.' type '.$type.' is not valid! Possible values are: EmbedsMany and EmbedsOne');
        }

        return json_encode($objs);
    }
public function isArrayCustom(mixed $value): bool
{
    if (is_string($value)) {
        throw new \Exception($value . ' is not a valid array!');
    }

    return $this->assertIsArrayCustom($value);
}
}
