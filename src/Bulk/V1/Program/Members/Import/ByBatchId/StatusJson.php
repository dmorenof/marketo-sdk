<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Import\ByBatchId;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/program/members/import/{batchId}/status.json [operationId: getImportProgramMemberStatusUsingGET] */
    /**
     * Get Import Program Member Status
     *
     * Returns the status of an import batch job. Required Permissions: Read-Write Lead
     */
    public static function get(int $batchId): \MarketoSDK\DTOs\ResponseOf\ImportProgramMember\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Import\ByBatchId\StatusJson::class)->get($batchId);
    }
}
