<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class AddFieldJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/schema/{apiName}/addField.json [operationId: addCustomObjectTypeFieldsUsingPOST] */
    /**
     * Add Custom Object Type Fields
     *
     * Adds fields to custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(string $apiName, \MarketoSDK\DTOs\Add\CustomObjectTypeFields\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\AddFieldJson::class)->post($apiName, $payload);
    }
}
