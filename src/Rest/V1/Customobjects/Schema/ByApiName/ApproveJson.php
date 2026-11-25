<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Customobjects\Schema\ByApiName;

final class ApproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/customobjects/schema/{apiName}/approve.json [operationId: approveCustomObjectTypeUsingPOST] */
    /**
     * Approve Custom Object Type
     *
     * Approves the current draft of the type, and makes it the live version. This will delete the current live version of the type. Required Permissions: Read-Write Custom Object Type
     */
    public static function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomObjectType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Customobjects\Schema\ByApiName\ApproveJson::class)->post($apiName);
    }
}
