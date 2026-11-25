<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type\ByApiName;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type/{apiName}/delete.json [operationId: deleteCustomActivityTypeUsingPOST] */
    /**
     * Delete Custom Activity Type
     *
     * Deletes the target custom activity type. The type must first be removed from use by any assets, such as triggers or filters. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(string $apiName): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\DeleteJson::class)->post($apiName);
    }
}
