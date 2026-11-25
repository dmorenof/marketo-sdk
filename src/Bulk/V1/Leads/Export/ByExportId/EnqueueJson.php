<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Export\ByExportId;

final class EnqueueJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/leads/export/{exportId}/enqueue.json [operationId: enqueueExportLeadsUsingPOST] */
    /**
     * Enqueue Export Lead Job
     *
     * Enqueue export job. This will place export job in queue, and will start the job when computing resources become available. The export job must be in "Created" state. Use Get Export Lead Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead
     */
    public static function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Export\ByExportId\EnqueueJson::class)->post($exportId);
    }
}
