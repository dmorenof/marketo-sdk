<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Export;

final class CreateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/customobjects/{apiName}/export/create.json [operationId: createExportCustomObjectsUsingPOST] */
    /**
     * Create Export Custom Object Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Custom Object endpoints. Use Enqueue Export Custom Object Job endpoint to queue the export job for processing. Use Get Export Custom Object Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Custom Object
     */
    public static function post(string $apiName, ?\MarketoSDK\DTOs\Export\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\CreateJson::class)->post($apiName);
        }
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\CreateJson::class)->post($apiName, $payload);
    }

}
