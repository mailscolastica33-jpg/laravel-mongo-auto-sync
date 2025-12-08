<?php

namespace OfflineAgency\MongoAutoSync\Helpers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use stdClass;

class SyncHelper
{
    /**
     * @param  array|null  $mlCollection
     * @return string
     */
    public static function getTranslatedContent($mlCollection)
    {
        $cl = Config::get('app.locale');

        if (is_array($mlCollection) && (array_key_exists('en_EN', $mlCollection) || array_key_exists('it_IT', $mlCollection) || ! is_null($mlCollection))) {
            return $mlCollection[$cl] ?? '';
        } else {
            return '';
        }
    }

    /**
     * @return string current Lang
     */
    public static function cl()
    {
        return Config::get('app.locale');
    }

    /**
     * @param  array|null  $destination
     * @param  string  $input
     * @return array ready to be saved
     */
    public static function ml($destination, $input)
    {
        if (is_null($destination)) {
            $destination = [];
        }

        return array_merge($destination, [self::cl() => $input]);
    }

    public static function isML($value)
    {
        try {
            if (gettype($value) !== 'array') {
                return false;
            }
        } catch (Exception $exception) {
            return false;
        }

        if (array_key_exists('is-ml', $value)) {
            return $value['is-ml'];
        } else {
            return false;
        }
    }

    public static function isMD($value)
    {
        if (is_array($value) && array_key_exists('is-md', $value)) {
            return $value['is-md'];
        } else {
            return false;
        }
    }

    public static function is_EM($value)
    {
        return $value === 'EmbedsMany';
    }

    public static function is_EO($value)
    {
        return $value === 'EmbedsOne';
    }

    public static function is_HM($value)
    {
        return $value === 'HasMany';
    }

    public static function is_HO($value)
    {
        return $value === 'HasOne';
    }

    public static function isEditable($value)
    {
        if (is_array($value) && array_key_exists('is-editable', $value)) {
            return $value['is-editable'];
        } else {
            return true;
        }
    }

    public static function hasTarget($value)
    {
        if (is_array($value) && array_key_exists('has-target', $value)) {
            return $value['has-target'];
        } else {
            return true;
        }
    }

    public static function isFillable($value, $event)
    {
        if ($event === 'add') {
            return true;
        } else {
            return self::isEditable($value);
        }
    }

    /**
     * @return Request
     */
    public static function getRequestToBeSync($ref_id, $modelOnTarget, Request $request, $methodOnTarget)
    {
        $new_req_embeded = new stdClass;
        /** @var mixed $model */
        $model = new $modelOnTarget;
        /** @var array $items */
        $items = $model->getItems();

        foreach ($items as $key => $item) {
            if ($key == 'ref_id') {
                $new_req_embeded->$key = $ref_id;
            } else {
                $new_req_embeded->$key = $request->input($key);
            }
        }

        $new_req = [];
        $new_req[$methodOnTarget] = json_encode($new_req_embeded);
        $request = new Request;
        $request->merge($new_req);

        return $request;
    }

    public static function isRequestReadyToBeProcessed(Request $request)
    {
        $requests = $request->all();
        unset($requests['_token']);

        foreach ($requests as $key => $val) {
            $pos = strpos($key, '-');
            if ($pos === false) {
                return false;
            }
        }

        return true;
    }

    public static function removeSubCollectionInput(Request $request)
    {
        return $request;
    }

    /**
     * @return Request
     */
    public static function prepareRequest(Request $request, array $additionalData)
    {
        return $request->merge($additionalData);
    }

    /**
     * @return array
     */
    public static function getArrayWithEmptyObj($model, $is_EO, $is_EM)
    {
        $arr = [];
        if ($is_EO) {
            $obj = new stdClass;
            /** @var mixed $embedObj */
            $embedObj = new $model;
            /** @var array $EOitems */
            $EOitems = $embedObj->getItems();

            // Current Obj Create
            foreach ($EOitems as $EOkey => $item) {
                $obj->$EOkey = null;
            }

            $arr[] = $obj;
        }// $is_EM == empty array

        return $arr;
    }

    /**
     * @return string
     */
    public static function getCounterForRelationships($method, $is_EO, $is_EM, $i)
    {
        if ($method === '' || ($method !== '' && $is_EO) || ($method === '' && $is_EM)) {
            return '';
        } else {
            return '-'.$i;
        }
    }
}
