<?php
namespace OfflineAgency\MongoAutoSync\Http\Models;

class DefaultMini extends MDModel
{
    protected $primaryKey = 'ref_id';

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (is_array($value) && count($value) === 1 && array_key_exists(0, $value)) {
            return $value[0];
        }

        return $value;
    }

    public function getRefIdAttribute($value): ?string
    {
        if (is_null($value)) return null;
        if ($value instanceof \MongoDB\BSON\ObjectId) return (string) $value;
        if (is_array($value) && isset($value[0])) return (string) $value[0];
        if (is_array($value) && isset($value['$oid'])) return $value['$oid'];
        return (string) $value;
    }
}