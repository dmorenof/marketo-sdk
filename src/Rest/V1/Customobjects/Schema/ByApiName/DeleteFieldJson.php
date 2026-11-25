<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class DeleteFieldJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/schema/{apiName}/deleteField.json [operationId: deleteCustomObjectTypeFieldsUsingPOST] */
    /**
     * Delete Custom Object Type Fields
     *
     * Deletes fields from custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(string $apiName, \MarketoSDK\DTOs\Delete\CustomObjectTypeFields\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\DeleteFieldJson::class)->post($apiName, $payload);
    }
}
