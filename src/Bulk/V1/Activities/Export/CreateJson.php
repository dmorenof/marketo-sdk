<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Activities\Export;

final class CreateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/activities/export/create.json [operationId: createExportActivitiesUsingPOST] */
    /**
     * Create Export Activity Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Activities endpoints. Use Enqueue Export Activity Job endpoint to queue the export job for processing. Use Get Export Activity Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Activity
     */
    public static function post(?\MarketoSDK\DTOs\Export\Activity\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Activities\Export\CreateJson::class)->post();
        }
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Activities\Export\CreateJson::class)->post($payload);
    }
}
