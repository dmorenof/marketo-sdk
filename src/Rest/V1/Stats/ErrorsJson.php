<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Stats;

final class ErrorsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/stats/errors.json [operationId: getDailyErrorsUsingGET] */
    /**
     * Get Daily Errors
     *
     * Retrieves a count of each error type they have encountered in the current day. Required Permissions: None
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\ErrorsData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Stats\ErrorsJson::class)->get();
    }
}
