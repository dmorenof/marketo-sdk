<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities;

final class RolesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/opportunities/roles.json [operationId: getOpportunityRolesUsingGET] */
    /**
     * Get Opportunity Roles
     *
     * Returns a list of opportunity roles based on a filter and set of values. Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\Opportunities\RolesJson $params): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\RolesJson::class)->get($params);
    }

    /** POST /rest/v1/opportunities/roles.json [operationId: syncOpportunityRolesUsingPOST] */
    /**
     * Sync Opportunity Roles
     *
     * Allows inserts, updates and upserts of Opportunity Role records in the target instance. Required Permissions: Read-Write Named Opportunity
     */
    public static function post(\MarketoSDK\DTOs\Sync\CustomObject\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\RolesJson::class)->post($payload);
    }
}
