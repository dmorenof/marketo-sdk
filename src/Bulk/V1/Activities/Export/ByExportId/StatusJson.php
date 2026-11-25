<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Activities\Export\ByExportId;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/activities/export/{exportId}/status.json [operationId: getExportActivitiesStatusUsingGET] */
    /**
     * Get Export Activity Job Status
     *
     * Returns status of an export job. Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Activity
     */
    public static function get(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Activities\Export\ByExportId\StatusJson::class)->get($exportId);
    }
}
