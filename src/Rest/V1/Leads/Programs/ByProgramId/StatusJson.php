<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\Programs\ByProgramId;

final class StatusJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/leads/programs/{programId}/status.json [operationId: changeLeadProgramStatusUsingPOST] */
    /**
     * Change Lead Program Status
     *
     * Changes the program status of a list of leads in a target program. Only existing members of the program may have their status changed with this API. Required Permissions: Read-Write Lead<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/mapi/#operation/syncProgramMemberStatusUsingPOST">Sync Program Member Status</a> endpoint instead.
     */
    public static function post(int $programId, \MarketoSDK\DTOs\ChangeLeadProgramStatusRequest $payload): \MarketoSDK\DTOs\ResponseOf\ChangeLeadProgramStatusOutputData
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Programs\ByProgramId\StatusJson::class)->post($programId, $payload);
    }
}
