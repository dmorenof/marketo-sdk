<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External;

final class TypeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/activities/external/type.json [operationId: createCustomActivityTypeUsingPOST] */
    /**
     * Create Custom Activity Type
     *
     * Creates a new custom activity type draft in the target instance. Required Permissions: Read-Write Activity Metadata
     */
    public static function post(\MarketoSDK\DTOs\CustomActivity\Type\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\TypeJson::class)->post($payload);
    }
}
