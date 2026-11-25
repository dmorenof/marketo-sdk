<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type\ByApiName\Attributes;

final class UpdateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type/{apiName}/attributes/update.json [operationId: updateCustomActivityTypeAttributesUsingPOST] */
    /**
     * Update Custom Activity Type Attributes
     *
     * Updates the attributes of the custom activity type draft. The apiName of each attribute is the primary key for the update. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(string $apiName, \MarketoSDK\DTOs\CustomActivity\TypeAttribute\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\Attributes\UpdateJson::class)->post($apiName, $payload);
    }
}
