<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects;

final class CustomObjectNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/customobjects/{customObjectName}.json [operationId: getCustomObjectsUsingGET] */
    /**
     * Get Custom Objects
     *
     * Retrieves a list of custom objects records based on filter and set of values. There are two unique types of requests for this endpoint: one is executed normally using a GET with URL parameters, the other is by passing a JSON object in the body of a POST and specifying _method=GET in the querystring. The latter is used when dedupeFields attribute has more than one field, which is known as a "compound key". Required Permissions: Read-Only Custom Object, Read-Write Custom Object
     */
    public static function get(string $customObjectName, \MarketoSDK\GetParams\Rest\V1\Customobjects\CustomObjectNameJson $params): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\CustomObjectNameJson::class)->get($customObjectName, $params);
    }

    /** POST /rest/v1/customobjects/{customObjectName}.json [operationId: syncCustomObjectsUsingPOST] */
    /**
     * Sync Custom Objects
     *
     * Inserts, updates, or upserts custom object records to the target instance. Required Permissions: Read-Write Custom Object
     */
    public static function post(string $customObjectName, \MarketoSDK\DTOs\Sync\CustomObject\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\CustomObjectNameJson::class)->post($customObjectName, $payload);
    }
}
