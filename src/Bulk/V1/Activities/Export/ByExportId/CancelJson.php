<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Activities\Export\ByExportId;

final class CancelJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/activities/export/{exportId}/cancel.json [operationId: cancelExportActivitiesUsingPOST] */
    /**
     * Cancel Export Activity Job
     *
     * Cancel export job. Required Permissions: Read-Only Activity
     */
    public static function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Activities\Export\ByExportId\CancelJson::class)->post($exportId);
    }

}
