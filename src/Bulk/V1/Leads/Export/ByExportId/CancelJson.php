<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Leads\Export\ByExportId;

final class CancelJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/leads/export/{exportId}/cancel.json [operationId: cancelExportLeadsUsingPOST] */
    /**
     * Cancel Export Lead Job
     *
     * Cancel export job. Required Permissions: Read-Only Lead
     */
    public static function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Leads\Export\ByExportId\CancelJson::class)->post($exportId);
    }
}
