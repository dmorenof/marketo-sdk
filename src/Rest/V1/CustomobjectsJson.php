<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class CustomobjectsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects.json [operationId: listCustomObjectsUsingGET] */
    /**
     * List Custom Objects
     *
     * Returns a list of Custom Object types available in the target instance, along with id and deduplication information for each type. Required Permissions: Read-Only Custom Object, Read-Write Custom Object
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\CustomobjectsJson $params = null): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\CustomobjectsJson::class)->get($params);
    }
}
