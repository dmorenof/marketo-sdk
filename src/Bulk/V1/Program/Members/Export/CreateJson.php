<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\Members\Export;

final class CreateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/program/members/export/create.json [operationId: createExportProgramMembersUsingPOST] */
    /**
     * Create Export Program Member Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Program Members endpoints. Use Enqueue Export Program Member Job endpoint to queue the export job for processing. Use Get Export Program Member Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Lead
     */
    public static function post(?\MarketoSDK\DTOs\Export\ProgramMember\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Export\CreateJson::class)->post();
        }
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\Members\Export\CreateJson::class)->post($payload);
    }

}
