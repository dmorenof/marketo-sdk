<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/customobjects/{apiName}/export/{exportId}/status.json [operationId: getExportCustomObjectsStatusUsingGET] */
    /**
     * Get Export Custom Object Job Status
     *
     * Returns status of an export job. Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Custom Object
     */
    public static function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\StatusJson $identifier): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\StatusJson::class)->get($identifier);
    }

}
