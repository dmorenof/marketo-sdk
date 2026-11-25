<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Stats;

final class UsageJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/stats/usage.json [operationId: getDailyUsageUsingGET] */
    /**
     * Get Daily Usage
     *
     * Returns the number of calls consumed for the day. Required Permissions: None
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\UsageData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Stats\UsageJson::class)->get();
    }
}
