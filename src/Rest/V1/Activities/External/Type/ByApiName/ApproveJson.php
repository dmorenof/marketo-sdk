<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type\ByApiName;

final class ApproveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type/{apiName}/approve.json [operationId: approveCustomActivityTypeUsingPOST] */
    /**
     * Approve Custom Activity Type
     *
     * Approves the current draft of the type, and makes it the live version. This will delete the current live version of the type. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\ApproveJson::class)->post($apiName);
    }

}
