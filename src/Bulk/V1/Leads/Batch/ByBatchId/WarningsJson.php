<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Batch\ByBatchId;

final class WarningsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/leads/batch/{batchId}/warnings.json [operationId: getImportLeadWarningsUsingGET] */
    /**
     * Get Import Lead Warnings
     *
     * Returns the list of warnings for the import batch job. Required Permissions: Read-Write Lead
     */
    public static function get(int $batchId): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Batch\ByBatchId\WarningsJson::class)->get($batchId);
    }

}
