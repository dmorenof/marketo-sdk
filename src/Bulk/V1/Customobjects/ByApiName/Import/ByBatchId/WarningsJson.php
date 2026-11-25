<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class WarningsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/customobjects/{apiName}/import/{batchId}/warnings.json [operationId: getImportCustomObjectWarningsUsingGET] */
    /**
     * Get Import Custom Object Warnings
     *
     * Returns the list of warnings for the import batch job. Required Permissions: Read-Write Custom Object
     */
    public static function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\WarningsJson $identifier): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\WarningsJson::class)->get($identifier);
    }

}
