<?php

use Illuminate\Http\Request;
use OfflineAgency\MongoAutoSync\Helpers\SyncHelper;

if (! function_exists('getTranslatedContent')) {

    /**
     * @param  array  $mlCollection
     * @return string
     */
    function getTranslatedContent($mlCollection)
    {
        return SyncHelper::getTranslatedContent($mlCollection);
    }
}

if (! function_exists('cl')) {

    /**
     * @return string current Lang
     */
    function cl()
    {
        return SyncHelper::cl();
    }
}

if (! function_exists('ml')) {
    // save a localized field
    /**
     * @param  array  $destination
     * @param  string  $input
     * @return array ready to be saved
     */
    function ml($destination, $input)
    {
        return SyncHelper::ml($destination, $input);
    }
}

if (! function_exists('isML')) {
    function isML($value)
    {
        return SyncHelper::isML($value);
    }
}

if (! function_exists('isMD')) {
    function isMD($value)
    {
        return SyncHelper::isMD($value);
    }
}
if (! function_exists('is_EM')) {
    function is_EM($value)
    {
        return SyncHelper::is_EM($value);
    }
}

if (! function_exists('is_EO')) {
    function is_EO($value)
    {
        return SyncHelper::is_EO($value);
    }
}

if (! function_exists('is_HM')) {
    function is_HM($value)
    {
        return SyncHelper::is_HM($value);
    }
}

if (! function_exists('is_HO')) {
    function is_HO($value)
    {
        return SyncHelper::is_HO($value);
    }
}

if (! function_exists('isEditable')) {
    function isEditable($value)
    {
        return SyncHelper::isEditable($value);
    }
}

if (! function_exists('hasTarget')) {
    function hasTarget($value)
    {
        return SyncHelper::hasTarget($value);
    }
}
if (! function_exists('isFillable')) {
    function isFillable($value, $event)
    {
        return SyncHelper::isFillable($value, $event);
    }
}

if (! function_exists('getRequestToBeSync')) {
    /**
     * @return Request
     */
    function getRequestToBeSync($ref_id, $modelOnTarget, Request $request, $methodOnTarget)
    {
        return SyncHelper::getRequestToBeSync($ref_id, $modelOnTarget, $request, $methodOnTarget);
    }
}

if (! function_exists('isRequestReadyToBeProcessed')) {
    function isRequestReadyToBeProcessed(Request $request)
    {
        return SyncHelper::isRequestReadyToBeProcessed($request);
    }
}

if (! function_exists('removeSubCollectionInput')) {
    function removeSubCollectionInput(Request $request)
    {
        return SyncHelper::removeSubCollectionInput($request);
    }
}

if (! function_exists('prepareRequest')) {

    /**
     * @return Request
     */
    function prepareRequest(Request $request, array $additionalData)
    {
        return SyncHelper::prepareRequest($request, $additionalData);
    }
}

if (! function_exists('getArrayWithEmptyObj')) {

    /**
     * @return array
     */
    function getArrayWithEmptyObj($model, $is_EO, $is_EM)
    {
        return SyncHelper::getArrayWithEmptyObj($model, $is_EO, $is_EM);
    }
}

if (! function_exists('getCounterForRelationships')) {

    /**
     * @return string
     */
    function getCounterForRelationships($method, $is_EO, $is_EM, $i)
    {
        return SyncHelper::getCounterForRelationships($method, $is_EO, $is_EM, $i);
    }
}
