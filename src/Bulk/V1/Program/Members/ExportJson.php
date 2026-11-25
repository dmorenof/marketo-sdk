<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members;

final class ExportJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /bulk/v1/program/members/export.json [operationId: getExportProgramMembersUsingGET] */
    /**
     * Get Export Program Member Jobs
     *
     * Returns a list of export jobs that were created in the past 7 days. Required Permissions: Read-Only Lead
     */
    public static function get(?\MarketoSDK\GetParams\Bulk\V1\Program\Members\ExportJson $params = null): \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\ExportJson::class)->get($params);
    }

}
