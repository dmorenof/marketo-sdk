<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Import\ByBatchId;

final class FailuresJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/program/members/import/{batchId}/failures.json [operationId: getImportProgramMemberFailuresUsingGET] */
    /**
     * Get Import Program Member Failures
     *
     * Returns the list of failures for the import batch job. Required Permissions: Read-Write Lead
     */
    public static function get(int $batchId): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Import\ByBatchId\FailuresJson::class)->get($batchId);
    }
}
