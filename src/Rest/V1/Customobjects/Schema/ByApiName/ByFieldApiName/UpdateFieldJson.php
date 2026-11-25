<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName;

final class UpdateFieldJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/schema/{apiName}/{fieldApiName}/updateField.json [operationId: updateCustomObjectTypeFieldUsingPOST] */
    /**
     * Update Custom Object Type Field
     *
     * Updates a field in custom object type. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(\MarketoSDK\PathParams\Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName\UpdateFieldJson $identifier, \MarketoSDK\DTOs\Update\CustomObjectTypeField\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName\UpdateFieldJson::class)->post($identifier, $payload);
    }
}
