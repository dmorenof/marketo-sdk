<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Program\ByProgramId\Members;

final class ImportJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/program/{programId}/members/import.json [operationId: importProgramMemberUsingPOST] */
    /**
     * Import Program Members
     *
     * Imports a file containing data records into the target instance. Required Permissions: Read-Write Lead
     */
    public static function post(string $programId, \MarketoSDK\PostParams\Bulk\V1\Program\ByProgramId\Members\ImportJson $params): \MarketoSDK\DTOs\ResponseOf\ImportProgramMember\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Program\ByProgramId\Members\ImportJson::class)->post($programId, $params);
    }
}
