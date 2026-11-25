<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Stats\Errors;

final class Last7daysJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/stats/errors/last7days.json [operationId: getLast7DaysErrorsUsingGET] */
    /**
     * Get Weekly Errors
     *
     * Returns a count of each error type they have encountered in the past 7 days. Required Permissions: None
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ErrorsData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Stats\Errors\Last7daysJson::class)->get();
    }
}
