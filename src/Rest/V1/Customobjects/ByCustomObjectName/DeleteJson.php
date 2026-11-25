<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\ByCustomObjectName;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/{customObjectName}/delete.json [operationId: deleteCustomObjectsUsingPOST] */
    /**
     * Delete Custom Objects
     *
     * Deletes a given set of custom object records. Required Permissions: Read-Write Custom Object
     */
    public static function post(string $customObjectName, ?\MarketoSDK\DTOs\Delete\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\ByCustomObjectName\DeleteJson::class)->post($customObjectName);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\ByCustomObjectName\DeleteJson::class)->post($customObjectName, $payload);
    }

}
