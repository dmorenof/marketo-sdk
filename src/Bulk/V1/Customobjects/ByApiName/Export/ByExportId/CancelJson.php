<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class CancelJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/customobjects/{apiName}/export/{exportId}/cancel.json [operationId: cancelExportCustomObjectsUsingPOST] */
    /**
     * Cancel Export Custom Object Job
     *
     * Cancel export job. Required Permissions: Read-Only Custom Object
     */
    public static function post(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\CancelJson $identifier): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\CancelJson::class)->post($identifier);
    }
}
