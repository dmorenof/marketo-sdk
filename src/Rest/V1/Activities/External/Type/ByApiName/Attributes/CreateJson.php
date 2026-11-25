<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External\Type\ByApiName\Attributes;

final class CreateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type/{apiName}/attributes/create.json [operationId: createCustomActivityTypeAttributesUsingPOST] */
    /**
     * Create Custom Activity Type Attributes
     *
     * Adds activity attributes to the target type. These are added to the draft version of the type. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(string $apiName, \MarketoSDK\DTOs\CustomActivity\TypeAttribute\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\Type\ByApiName\Attributes\CreateJson::class)->post($apiName, $payload);
    }

}
