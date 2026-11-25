<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities;

final class TypesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities/types.json [operationId: getAllActivityTypesUsingGET] */
    /**
     * Get Activity Types
     *
     * Returns a list of available activity types in the target instance, along with associated metadata of each type. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ActivityType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\TypesJson::class)->get();
    }

}
