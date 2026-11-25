<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Programs\ByProgramId\Members;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/programs/{programId}/members/status.json [operationId: syncProgramMemberStatusUsingPOST] */
    /**
     * Sync Program Member Status
     *
     * Changes the program member status of a list of leads in a target program. If member is not part of the program, member is added to the program. Required Permissions: Read-Write Lead
     */
    public static function post(int $programId, \MarketoSDK\DTOs\Sync\ProgramMemberStatus\Request $payload): \MarketoSDK\DTOs\ResponseOf\ProgramMemberStatus
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\ByProgramId\Members\StatusJson::class)->post($programId, $payload);
    }

}
