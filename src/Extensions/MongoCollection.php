<?php

namespace OfflineAgency\MongoAutoSync\Extensions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use OfflineAgency\MongoAutoSync\Helpers\SyncHelper;

class MongoCollection extends Collection
{
    // Method to retrieve a collection by slug, very useful for frontend
    public function getBySlugAndStatus($category = null, $myslug = null)
    {
        $cl = SyncHelper::cl();

        $out = $this->filter(function ($col) use ($category, $myslug, $cl) {
            if ($col->slug[$cl] == $myslug && $col->status == 'published' && $col->primarycategory->slug[$cl] == $category) {
                return true;
            } else {
                return false;
            }
        })->first();
        if (! $out) {// Handler 404 Object Not Found
            $first = $this->first();
            $obj_name = $first ? get_class($first) : 'Unknown Model';
            throw (new ModelNotFoundException)->setModel($obj_name);
        } else {
            return $out;
        }
    }

    /**
     * @param  null  $myslug
     * @return mixed
     */
    public function getBySlug($myslug = null)
    {
        $cl = SyncHelper::cl();
        $out = $this->filter(function ($col) use ($myslug, $cl) {
            if ($col->slug[$cl] == $myslug) {
                return true;
            }
        })->first();
        if (! $out) {// Handler 404 Object Not Found
            $first = $this->first();
            $obj_name = $first ? get_class($first) : 'Unknown Model';
            throw (new ModelNotFoundException)->setModel($obj_name);
        } else {
            return $out;
        }
    }

    // Method to retrieve only not deleted item of a collection - Check on is_deleted custom property added on MDMODEL ovverriding init, delete

    /**
     * @return MongoCollection
     */
    public function getNotDeleted()
    {
        return $this->filter(function ($col) {
            return ! $col->is_deleted;
        });
    }

    // Method to retrieve only published item of a collection - Check on status entry

    /**
     * @return MongoCollection
     */
    public function getPublished()
    {
        return $this->filter(function ($col) {
            if ($col->status == 'published') {
                return true;
            } else {
                return false;
            }
        });
    }

    // Method to retrieve only public item of a collection - Check on status entry

    /**
     * @return MongoCollection
     */
    public function getPublic()
    {
        return $this->filter(function ($col) {
            if ($col->visibility === 'public') {
                return true;
            } else {
                return false;
            }
        });
    }

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
     * @return MongoCollection
     */
    public function getActive()
    {
        return $this->filter(function ($col) {
            return $col->is_active;
        });
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

    /**
     * @return mixed
     */
    public function findByAID(string $aid)
    {
        return $this->filter(function ($col) use ($aid) {
            return $col->autoincrement_id == $aid;
        })->first();
    }

    /**
     * @return bool
     */
    public function hasPermission($id)
    {
        if (is_null($id)) {
            return false;
        }

        $out = $this->filter(function ($col) use ($id) {
            if ($col->ref_id == $id) {
                return true;
            }
        });

        if ($out->count() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function hasRole($name)
    {
        if (is_null($name)) {
            return false;
        }

        $out = $this->filter(function ($col) use ($name) {
            if ($col->name == $name) {
                return true;
            }
        });

        if ($out->count() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function checkPermission($name)
    {
        if (is_null($name)) {
            return false;
        }

        $out = $this->filter(function ($col) use ($name) {
            if ($col->name == $name) {
                return true;
            }
        });

        if ($out->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
