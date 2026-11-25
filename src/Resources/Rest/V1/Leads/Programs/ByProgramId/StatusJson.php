<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\Programs\ByProgramId;

final class StatusJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/programs/{programId}/status.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ChangeLeadProgramStatusOutputData',
        'validation' => [
            'programId' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\ChangeLeadProgramStatusRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Change Lead Program Status
     *
     * Changes the program status of a list of leads in a target program. Only existing members of the program may have their status changed with this API. Required Permissions: Read-Write Lead<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/mapi/#operation/syncProgramMemberStatusUsingPOST">Sync Program Member Status</a> endpoint instead.
     */
    public function post(int $programId, \MarketoSDK\DTOs\ChangeLeadProgramStatusRequest $payload): \MarketoSDK\DTOs\ResponseOf\ChangeLeadProgramStatusOutputData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ChangeLeadProgramStatusOutputData $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['programId' => $programId]);
        return $result;
    }
}
