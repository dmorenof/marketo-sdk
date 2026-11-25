<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Programs\ByProgramId\Members;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/programs/{programId}/members/delete.json [operationId: deleteProgramMemberUsingPOST] */
    /**
     * Delete Program Members
     *
     * Delete a list of members from the destination instance. Required Permissions: Read-Write Lead
     */
    public static function post(int $programId, \MarketoSDK\DTOs\Delete\ProgramMember\Request $payload): \MarketoSDK\DTOs\ResponseOf\ProgramMemberDelete
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\ByProgramId\Members\DeleteJson::class)->post($programId, $payload);
    }

}
