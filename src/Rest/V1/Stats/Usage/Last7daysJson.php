<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Stats\Usage;

final class Last7daysJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/stats/usage/last7days.json [operationId: getLast7DaysUsageUsingGET] */
    /**
     * Get Weekly Usage
     *
     * Returns the number of calls consumed in the past 7 days. Required Permissions: None
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\UsageData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Stats\Usage\Last7daysJson::class)->get();
    }

}
