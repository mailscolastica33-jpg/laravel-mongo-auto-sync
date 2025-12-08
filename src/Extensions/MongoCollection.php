<?php

namespace OfflineAgency\MongoAutoSync\Extensions;

use Illuminate\Database\Eloquent\Collection;

class MongoCollection extends Collection
{
    // Check if the collection has an item with ref_id equal to id of the obj pass in to the parameter, useful to mark a category already selected in edit

    /**
     * @return bool
     */
    public function hasItem($obj)
    {
        if (is_null($obj)) {
            return false;
        } elseif (is_null($obj->id)) {
            return false;
        }

        $id = $obj->id;

        $out = $this->filter(function ($col) use ($id) {
            if ($col->ref_id == $id) {
                return true;
            } else {
                return false;
            }
        });
        if ($out->count() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Move the item with ref_id equal to the parameter, useful for edit primary category

    /**
     * @return $this
     */
    public function moveFirst($id)
    {
        for ($i = 0; $i <= ($this->count() - 1); $i++) {
            $this[$i]->ref_id == $id ? $this->prepend($this->splice($i, 1)[0]) : 0;
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function exist()
    {
        if ($this->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
