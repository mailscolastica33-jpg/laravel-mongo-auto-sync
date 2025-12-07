<?php

namespace OfflineAgency\MongoAutoSync\Traits;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use MongoDB\BSON\UTCDateTime;
use OfflineAgency\MongoAutoSync\Exceptions\MongoAutoSyncException;
use OfflineAgency\MongoAutoSync\Helpers\SyncHelper;

trait RelationshipMongoTrait
{
    /**
     * @throws MongoAutoSyncException
     */
    public function processAllRelationships(Request $request, string $event, string $parent, string $counter, array $options)
    {
        $this->setMiniModels(); // For target Sync

        // Get the relation info
        $relations = $this->getMongoRelation();

        // Process all relationships
        foreach ($relations as $method => $relation) {
            // Get Relation Save Mode
            $type = $relation['type'];
            $model = $relation['model'];
            $hasTarget = SyncHelper::hasTarget($relation);
            if ($hasTarget) {
                $modelTarget = $relation['modelTarget'];
                $methodOnTarget = $relation['methodOnTarget'];
                $modelOnTarget = $relation['modelOnTarget'];
                $typeOnTarget = Arr::has($relation, 'typeOnTarget') ? Arr::get($relation, 'typeOnTarget') : 'EmbedsMany';
            } else {
                $modelTarget = '';
                $methodOnTarget = '';
                $modelOnTarget = '';
                $typeOnTarget = '';
            }

            $is_EO = SyncHelper::is_EO($type);
            $is_EM = SyncHelper::is_EM($type);
            $is_HO = SyncHelper::is_HO($type);
            $is_HM = SyncHelper::is_HM($type);

            $is_EM_target = SyncHelper::is_EM($typeOnTarget);
            $is_EO_target = SyncHelper::is_EO($typeOnTarget);

            $key = $parent.$method.$counter;
            $is_skippable = $this->getIsSkippable($request->has($key), $hasTarget);

            if ($is_skippable) {
                continue;
            }
            $current_request = $request->has($key) ? $request : $this->getPartialGeneratedRequest();

            $value = $this->getRelationshipRequest($key, $current_request);

            $is_embeds_has_to_be_updated = $request->has($key);

            if (! is_null($value) && ! ($value == '') && ! ($value == '[]')) {
                $objs = json_decode($value);
            } else {
                $objs = SyncHelper::getArrayWithEmptyObj($model, $is_EO, $is_EM);
            }

            if ($is_EO || $is_EM) {// EmbedsOne Create - EmbedsMany Create
                if ($event == 'update' && $is_embeds_has_to_be_updated) {

                    // Delete EmbedsMany or EmbedsOne on Target - TODO: check if it is necessary to run deleteTargetObj method
                    if ($hasTarget) {
                        $this->deleteTargetObj($method, $modelTarget, $methodOnTarget, $is_EO, $is_EO_target, $is_EM_target);
                    }
                    // Delete EmbedsMany or EmbedsOne on current object
                    if ($is_EM) {
                        $this->$method = [];
                        $this->save();
                    }
                }

                if (! empty($objs)) {
                    if ($is_EM) {
                        $this->tempEM = [];
                    }

                    $i = 0;
                    foreach ($objs as $obj) {
                        $this->processOneEmbeddedRelationship(
                            $request,
                            $obj,
                            $type,
                            $model,
                            $method,
                            $modelTarget,
                            $methodOnTarget,
                            $modelOnTarget, $event,
                            $hasTarget,
                            $is_EO,
                            $is_EM,
                            $is_EO_target,
                            $is_EM_target,
                            $i,
                            $is_embeds_has_to_be_updated,
                            $options);
                        $i++;
                    }

                    if ($is_EM) {
                        $this->$method = $this->tempEM;
                    }
                } else {
                    $this->$method = [];
                }
                $this->save();
            } elseif ($is_HM || $is_HO) {
                if ($event == 'update' && $is_embeds_has_to_be_updated) {
                    $this->syncReferencedDelete($objs, $method, $relation, $is_HO);
                }

                if (! empty($objs)) {
                    $this->processReferencedRelationship($request, $objs, $method, $relation, $event, $options);
                }
            }
        }
    }

    /**
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     */
    public function updateRelationWithSync($mini_model, string $method_on_target, $is_EO_target, $is_EM_target)
    {
        if ($is_EM_target) {
            $new_values = [];
            foreach ($this->$method_on_target as $temp) {
                $new_values[] = $temp->attributes;
            }
            $new_values[] = $mini_model->attributes;
        } else {
            $new_values = $mini_model->attributes;
        }

        $this->$method_on_target = $new_values;
        $this->save();
    }

    /**
     * @param  bool  $is_EO
     * @param  bool  $is_EM
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     * @param  bool  $is_embeds_has_to_be_updated
     *
     * @throws MongoAutoSyncException
     */
    public function processOneEmbeddedRelationship(Request $request, $obj, $type, $model, $method, $modelTarget, $methodOnTarget, $modelOnTarget, $event, $hasTarget, $is_EO, $is_EM, $is_EO_target, $is_EM_target, $i, $is_embeds_has_to_be_updated, $options)
    {
        if ($is_embeds_has_to_be_updated) {
            $this->processEmbedOnCurrentCollection($request, $obj, $type, $model, $method, $event, $is_EO, $is_EM, $i, $options);
        }

        if ($hasTarget) {
            $this->processEmbedOnTargetCollection($modelTarget, $obj, $methodOnTarget, $modelOnTarget, $is_EO_target, $is_EM_target, $request, $event, $options);
        }
    }

    /**
     * @param  bool  $is_EO
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     */
    public function deleteTargetObj(string $method, string $modelTarget, string $methodOnTarget, bool $is_EO, bool $is_EO_target, bool $is_EM_target)
    {
        if (config('laravel-mongo-auto-sync.use_background_sync')) {
            return;
        }

        $targetIds = [];

        if ($is_EO) {
            $embedObj = $this->$method;
            if (! is_null($embedObj)) {
                $targetIds[] = $embedObj->ref_id;
            }
        } else {
            if (is_iterable($this->$method)) {
                foreach ($this->$method as $target) {
                    $targetIds[] = $target->ref_id;
                }
            }
        }

        if (!empty($targetIds)) {
            $this->batchHandleSubTarget($targetIds, $modelTarget, $methodOnTarget, $is_EO_target, $is_EM_target);
        }
    }

    /**
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     */
    public function batchHandleSubTarget(array $targetIds, string $modelTarget, string $methodOnTarget, bool $is_EO_target, bool $is_EM_target)
    {
        if ($is_EM_target) {
            $modelInstance = new $modelTarget;
            // Use whereIn for batch retrieval
            $targets = $modelInstance->whereIn('id', $targetIds)->get();

            foreach ($targets as $target) {
                if (! is_null($target)) {
                    $new_values = [];
                    // Check if the relationship exists and is iterable
                    if (isset($target->$methodOnTarget) && is_iterable($target->$methodOnTarget)) {
                        foreach ($target->$methodOnTarget as $temp) {
                            // Check if property exists to avoid undefined property notice
                            if (property_exists($temp, 'ref_id') && $temp->ref_id !== $this->getId()) {
                                $new_values[] = $temp->attributes ?? $temp;
                            } elseif (isset($temp['ref_id']) && $temp['ref_id'] !== $this->getId()) {
                                // Handle array case just in case
                                $new_values[] = $temp;
                            }
                        }
                    }
                    $target->$methodOnTarget = $new_values;
                    $target->save();
                }
            }
        }
    }

    /**
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     * @deprecated Use batchHandleSubTarget instead
     */
    public function handleSubTarget($target_id, $modelTarget, $methodOnTarget, $is_EO_target, $is_EM_target)
    {
        // Wrapper for backward compatibility
        $this->batchHandleSubTarget([$target_id], $modelTarget, $methodOnTarget, $is_EO_target, $is_EM_target);
    }

    public function syncReferencedDelete($objs, $method, $relation, $is_HO)
    {
        $current = $this->$method;
        $currentIds = [];

        if ($is_HO) {
            if ($current) {
                $currentIds[] = $current->id;
            }
        } else {
            if ($current) {
                foreach ($current as $item) {
                    $currentIds[] = $item->id;
                }
            }
        }

        $incomingIds = [];
        if (! empty($objs)) {
            foreach ($objs as $obj) {
                if (isset($obj->id)) {
                    $incomingIds[] = $obj->id;
                } elseif (isset($obj->_id)) {
                    $incomingIds[] = $obj->_id;
                }
            }
        }

        $toDelete = array_diff($currentIds, $incomingIds);
        $modelClass = $relation['model'];

        if (! empty($toDelete)) {
            // For Mongo, we might need to check how destroy works
            // It usually takes IDs.
            $modelClass::destroy($toDelete);
        }
    }

    public function processReferencedRelationship(Request $request, $objs, $method, $relation, $event, $options)
    {
        $modelClass = $relation['model'];
        $foreignKey = $relation['foreignKey'] ?? null;
        $localKey = $relation['localKey'] ?? 'id';

        foreach ($objs as $obj) {
            $attributes = (array) $obj;
            $id = $attributes['id'] ?? ($attributes['_id'] ?? null);

            $child = new $modelClass;
            if ($id) {
                $child = $child->find($id);
            }

            if ($child) {
                foreach ($attributes as $k => $v) {
                    if ($k !== 'id' && $k !== '_id') {
                        $child->$k = $v;
                    }
                }

                if ($foreignKey) {
                    // Assuming HasMany/HasOne where FK is on child
                    $child->$foreignKey = $this->$localKey;
                }

                if (method_exists($child, 'storeWithSync')) {
                    $childRequest = new Request;
                    $childRequest->merge($attributes);

                    if ($id) {
                        $child->updateWithSync($childRequest);
                    } else {
                        $child->storeWithSync($childRequest);
                    }
                } else {
                    $child->save();
                }
            }
        }
    }

    public function deleteReferencedObj($method, $is_HO)
    {
        $relationData = $this->$method;
        if ($is_HO) {
            if ($relationData) {
                $relationData->delete();
            }
        } else {
            if ($relationData) {
                foreach ($relationData as $item) {
                    $item->delete();
                }
            }
        }
    }

    /**
     * @throws MongoAutoSyncException
     */
    private function processEmbedOnCurrentCollection(Request $request, $obj, $type, $model, $method, $event, $is_EO, $is_EM, $i, $options)
    {
        // Init the embed one model
        $embedObj = new $model;

        $EOitems = $embedObj->getItems();
        // Current Obj Create
        foreach ($EOitems as $EOkey => $item) {
            if (! is_null($obj)) {
                $is_ML = SyncHelper::isML($item);
                $is_MD = SyncHelper::isMD($item);
                $this->checkPropertyExistence($obj, $EOkey, $method, $model);

                if ($is_ML) {
                    $embedObj->$EOkey = SyncHelper::ml([], $obj->$EOkey);
                } elseif ($EOkey == 'updated_at' || $EOkey == 'created_at') {
                    $embedObj->$EOkey = now();
                } elseif ($is_MD) {
                    if ($obj->$EOkey == '' || $obj->$EOkey == null) {
                        $embedObj->$EOkey = null;
                    } else {
                        $embedObj->$EOkey = new UTCDateTime(new DateTime($obj->$EOkey));
                    }
                } else {
                    $embedObj->$EOkey = $obj->$EOkey;
                }
            }
        }

        // else if($is_EM){//To be implemented}
        // else if($is_HM){//To be implemented}
        // else if($is_HO){//To be implemented}

        // Get counter for embeds many with level > 1
        $counter = SyncHelper::getCounterForRelationships($method, $is_EO, $is_EM, $i);
        // Check for another Level of Relationship
        $embedObj->processAllRelationships($request, $event, $method.'-', $counter, $options);

        if ($is_EO) {
            $this->$method = $embedObj->attributes;
        } else {
            $this->tempEM[] = $embedObj->attributes;
        }
    }

    /**
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     *
     * @throws MongoAutoSyncException
     */
    private function processEmbedOnTargetCollection($modelTarget, $obj, $methodOnTarget, $modelOnTarget, $is_EO_target, $is_EM_target, $request = null, $event = null, $options = [])
    {
        if (config('laravel-mongo-auto-sync.use_background_sync')) {
            return;
        }

        $modelToBeSync = $this->getModelTobeSync($modelTarget, $obj);
        if (! is_null($modelToBeSync)) {
            $miniModel = $this->getEmbedModel($modelOnTarget);
            $modelToBeSync->updateRelationWithSync($miniModel, $methodOnTarget, $is_EO_target, $is_EM_target);
            // Sync target on level > 1
            if ($request && $event) {
                $modelToBeSync->processAllRelationships($request, $event, $methodOnTarget, $methodOnTarget.'-', $options);
            }
        }
    }
}
