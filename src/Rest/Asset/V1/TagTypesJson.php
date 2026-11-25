<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class TagTypesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/tagTypes.json [operationId: getTagTypesUsingGET] */
    /**
     * Get Tag Types
     *
     * Retrieves a list of available tag types. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\TagTypesJson $params = null): \MarketoSDK\DTOs\ResponseOf\TagResponseGetAll
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\TagTypesJson::class)->get($params);
    }
}
