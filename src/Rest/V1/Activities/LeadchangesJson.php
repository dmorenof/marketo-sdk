<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Activities;

final class LeadchangesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities/leadchanges.json [operationId: getLeadChangesUsingGET] */
    /**
     * Get Lead Changes
     *
     * Returns a list of Data Value Changes and New Lead activities after a given datetime. Beginning 2026-09-30, calls to the `Get Lead Activities` and `Get Lead Changes` endpoints which includes the `listId` parameter will fail (error code 1003) if the target lists contain 10,000 or more leads. To avoid service disruptions, ensure that calls are properly scoped to avoid this limit. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\Activities\LeadchangesJson $params): \MarketoSDK\DTOs\ResponseOf\LeadChange
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Activities\LeadchangesJson::class)->get($params);
    }

}
