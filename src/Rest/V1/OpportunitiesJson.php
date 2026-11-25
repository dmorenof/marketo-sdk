<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class OpportunitiesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/opportunities.json [operationId: getOpportunitiesUsingGET] */
    /**
     * Get Opportunities
     *
     * Returns a list of opportunities based on a filter and set of values. Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\OpportunitiesJson $params): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\OpportunitiesJson::class)->get($params);
    }

    /** POST /rest/v1/opportunities.json [operationId: syncOpportunitiesUsingPOST] */
    /**
     * Sync Opportunities
     *
     * Allows inserting, updating, or upserting of opportunity records into the target instance. Required Permissions: Read-Write Named Opportunity
     */
    public static function post(\MarketoSDK\DTOs\Sync\CustomObject\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\OpportunitiesJson::class)->post($payload);
    }

}
