<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Batch;

final class BatchIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/leads/batch/{batchId}.json [operationId: getImportLeadStatusUsingGET] */
    /**
     * Get Import Lead Status
     *
     * Returns the status of an import batch job. Required Permissions: Read-Write Lead
     */
    public static function get(int $batchId): \MarketoSDK\DTOs\ResponseOf\ImportLead\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Batch\BatchIdJson::class)->get($batchId);
    }
}
