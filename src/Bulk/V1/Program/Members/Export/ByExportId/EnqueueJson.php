<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Export\ByExportId;

final class EnqueueJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/program/members/export/{exportId}/enqueue.json [operationId: enqueueExportProgramMembersUsingPOST] */
    /**
     * Enqueue Export Program Member Job
     *
     * Enqueue export job. This will place export job in queue, and will start the job when computing resources become available. The export job must be in "Created" state. Use Get Export Program Member Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead
     */
    public static function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Export\ByExportId\EnqueueJson::class)->post($exportId);
    }

}
