<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Export;

final class CreateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/leads/export/create.json [operationId: createExportLeadsUsingPOST] */
    /**
     * Create Export Lead Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Leads endpoints. Use Enqueue Export Lead Job endpoint to queue the export job for processing. Use Get Export Lead Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead
     */
    public static function post(?\MarketoSDK\DTOs\Export\Lead\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Export\CreateJson::class)->post();
        }
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Export\CreateJson::class)->post($payload);
    }

}
