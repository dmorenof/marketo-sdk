<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Batch\ByBatchId;

final class FailuresJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/leads/batch/{batchId}/failures.json [operationId: getImportLeadFailuresUsingGET] */
    /**
     * Get Import Lead Failures
     *
     * Returns the list of failures for the import batch job. Required Permissions: Read-Write Lead
     */
    public static function get(int $batchId): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Batch\ByBatchId\FailuresJson::class)->get($batchId);
    }

}
