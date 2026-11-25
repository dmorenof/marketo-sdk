<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Export\ByExportId;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/program/members/export/{exportId}/status.json [operationId: getExportProgramMembersStatusUsingGET] */
    /**
     * Get Export Program Member Job Status
     *
     * Returns status of an export job. Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Lead
     */
    public static function get(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Export\ByExportId\StatusJson::class)->get($exportId);
    }

}
