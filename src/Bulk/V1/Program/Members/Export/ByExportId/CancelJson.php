<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Export\ByExportId;

final class CancelJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/program/members/export/{exportId}/cancel.json [operationId: cancelExportProgramMembersUsingPOST] */
    /**
     * Cancel Export Program Member Job
     *
     * Cancel export job. Required Permissions: Read-Only Lead
     */
    public static function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Export\ByExportId\CancelJson::class)->post($exportId);
    }

}
