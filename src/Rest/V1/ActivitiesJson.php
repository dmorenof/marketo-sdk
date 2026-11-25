<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class ActivitiesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/activities.json [operationId: getLeadActivitiesUsingGET] */
    /**
     * Get Lead Activities
     *
     * Returns a list of activities from after a datetime given by the `nextPageToken` parameter. Also allows for filtering by lead static list membership, or by a list of up to 30 lead ids. Beginning 2026-09-30, calls to the `Get Lead Activities` and `Get Lead Changes` endpoints which includes the `listId` parameter will fail (error code 1003) if the target lists contain 10,000 or more leads. To avoid service disruptions, ensure that calls are properly scoped to avoid this limit. Required Permissions: Read-Only Activity, Read-Write Activity
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\ActivitiesJson $params): \MarketoSDK\DTOs\ResponseOf\Activity
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\ActivitiesJson::class)->get($params);
    }
}
