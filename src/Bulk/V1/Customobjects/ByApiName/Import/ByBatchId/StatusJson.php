<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/customobjects/{apiName}/import/{batchId}/status.json [operationId: getImportCustomObjectStatusUsingGET] */
    /**
     * Get Import Custom Object Status
     *
     * Returns the status of an import batch job. Required Permissions: Read-Write Custom Object
     */
    public static function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\StatusJson $identifier): \MarketoSDK\DTOs\ResponseOf\ImportCustomObject\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\StatusJson::class)->get($identifier);
    }
}
