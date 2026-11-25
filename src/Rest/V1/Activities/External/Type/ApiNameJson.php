<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type;

final class ApiNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type/{apiName}.json [operationId: updateCustomActivityTypeUsingPOST] */
    /**
     * Update Custom Activity Type
     *
     * Updates the target custom activity type. All changes are applied to the draft version of the type. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(string $apiName, \MarketoSDK\DTOs\CustomActivity\Type\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ApiNameJson::class)->post($apiName, $payload);
    }

}
