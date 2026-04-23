<?php
namespace OfflineAgency\MongoAutoSync\Http\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;
use OfflineAgency\MongoAutoSync\Traits\Helper;
use OfflineAgency\MongoAutoSync\Traits\MainMongoTrait;
use OfflineAgency\MongoAutoSync\Traits\ModelAdditionalMethod;
use OfflineAgency\MongoAutoSync\Traits\PlainMongoTrait;
use OfflineAgency\MongoAutoSync\Traits\RelationshipMongoTrait;

class MDModel extends Eloquent
{
    use MainMongoTrait, ModelAdditionalMethod, Helper, PlainMongoTrait, RelationshipMongoTrait;

    protected $connection = 'mongodb';
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function getAttribute($key)
{
    $value = parent::getAttribute($key);

    if (is_array($value) && isset($this->mongoRelation[$key])) {
        $relation = $this->mongoRelation[$key];
        $modelClass = $relation['model'];
        $type = $relation['type'];

        if ($type === 'EmbedsOne') {
            $instance = new $modelClass;
            foreach ($value as $k => $v) {
                $instance->$k = (is_array($v) && count($v) === 1 && isset($v[0])) ? $v[0] : $v;
            }
            return $instance;
        }

        if ($type === 'EmbedsMany') {
            return collect($value)->map(function ($item) use ($modelClass) {
                if (is_array($item)) {
                    $instance = new $modelClass;
                    foreach ($item as $k => $v) {
                        $instance->$k = (is_array($v) && count($v) === 1 && isset($v[0])) ? $v[0] : $v;
                    }
                    return $instance;
                }
                return $item;
            });
        }
    }

    return $value;
}

    public function getId()
    {
        return $this->id;
    }

    public function getCollection()
    {
        return $this->collection;
    }

    public function getRandom($size = 3)
    {
        return $this->all()->random($size);
    }
}