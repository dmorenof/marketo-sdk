<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Activities;

final class ExportJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/activities/export.json [operationId: getExportActivitiesUsingGET] */
    /**
     * Get Export Activity Jobs
     *
     * Returns a list of export jobs that were created in the past 7 days. Required Permissions: Read-Only Activity
     */
    public static function get(?\MarketoSDK\GetParams\Bulk\V1\Activities\ExportJson $params = null): \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Activities\ExportJson::class)->get($params);
    }
}
