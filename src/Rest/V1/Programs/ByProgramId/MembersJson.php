<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Programs\ByProgramId;

final class MembersJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/programs/{programId}/members.json [operationId: getProgramMembersUsingGET] */
    /**
     * Get Program Members
     *
     * Returns a list of up to 300 program members on a list of values in a particular field. If you specify a filterType that is a custom field, the custom field’s dataType must be either “string” or “integer”. If you specify a filterType other than “leadId”, a maximum of 100,000 program member records can be processed by the request. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public static function get(int $programId, \MarketoSDK\GetParams\Rest\V1\Programs\ByProgramId\MembersJson $params): \MarketoSDK\DTOs\ResponseOf\ProgramMember
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\ByProgramId\MembersJson::class)->get($programId, $params);
    }

    /** POST /rest/v1/programs/{programId}/members.json [operationId: syncProgramMemberDataUsingPOST] */
    /**
     * Sync Program Member Data
     *
     * Changes the program member data of a list of leads in a target program. Only existing members of the program may have their data changed with this API. Required Permissions: Read-Write Lead
     */
    public static function post(int $programId, \MarketoSDK\DTOs\Sync\ProgramMemberData\Request $payload): \MarketoSDK\DTOs\ResponseOf\ProgramMemberData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\ByProgramId\MembersJson::class)->post($programId, $payload);
    }
}
