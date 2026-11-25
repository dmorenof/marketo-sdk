<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class EnqueueJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/customobjects/{apiName}/export/{exportId}/enqueue.json [operationId: enqueueExportCustomObjectsUsingPOST] */
    /**
     * Enqueue Export Custom Object Job
     *
     * Enqueue export job. This will place export job in queue, and will start the job when computing resources become available. The export job must be in "Created" state. Use Get Export Custom Object Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Custom Object
     */
    public static function post(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\EnqueueJson $identifier): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\EnqueueJson::class)->post($identifier);
    }

}
