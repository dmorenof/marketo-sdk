<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class FailuresJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/customobjects/{apiName}/import/{batchId}/failures.json [operationId: getImportCustomObjectFailuresUsingGET] */
    /**
     * Get Import Custom Object Failures
     *
     * Returns the list of failures for the import batch job. Required Permissions: Read-Write Custom Object
     */
    public static function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\FailuresJson $identifier): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\FailuresJson::class)->get($identifier);
    }
}
