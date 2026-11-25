<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName;

final class ExportJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/customobjects/{apiName}/export.json [operationId: getExportCustomObjectsUsingGET] */
    /**
     * Get Export Custom Object Jobs
     *
     * Returns a list of export jobs that were created in the past 7 days. Required Permissions: Read-Only Custom Object
     */
    public static function get(string $apiName, ?\MarketoSDK\GetParams\Bulk\V1\Customobjects\ByApiName\ExportJson $params = null): \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\ExportJson::class)->get($apiName, $params);
    }

}
