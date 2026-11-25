<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects;

final class SchemaJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/schema.json [operationId: listCustomObjectTypesUsingGET] */
    /**
     * List Custom Object Types
     *
     * Returns a list of Custom Object Types available in the target instance, along with id, deduplication, relationship, and field information for each type. Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\Customobjects\SchemaJson $params = null): \MarketoSDK\DTOs\ResponseOf\ObjectMetaData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\SchemaJson::class)->get($params);
    }

    /** POST /rest/v1/customobjects/schema.json [operationId: syncCustomObjectTypeUsingPOST] */
    /**
     * Sync Custom Object Type
     *
     * Inserts, updates, or upserts custom object type record to the target instance. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(\MarketoSDK\DTOs\Sync\CustomObjectType\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\SchemaJson::class)->post($payload);
    }

}
