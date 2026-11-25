<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities\External;

final class TypesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities/external/types.json [operationId: getCustomActivityTypeUsingGET] */
    /**
     * Get Custom Activity Types
     *
     * Returns metadata regarding custom activities provisioned in the target instance. Required Permissions: Read-Only Activity Metadata, Read-Write Activity Metadata
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\CustomActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\External\TypesJson::class)->get();
    }

}
