<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/schema/{apiName}/delete.json [operationId: deleteCustomObjectTypeUsingPOST] */
    /**
     * Delete Custom Object Type
     *
     * Deletes the target custom object type. The type must first be removed from use by any assets, such as triggers or filters. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\DeleteJson::class)->post($apiName);
    }
}
