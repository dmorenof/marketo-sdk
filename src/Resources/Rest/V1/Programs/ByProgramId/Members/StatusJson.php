<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Programs\ByProgramId\Members;

final class StatusJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/programs/{programId}/members/status.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ProgramMemberStatus',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\ProgramMemberStatus\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Program Member Status
     *
     * Changes the program member status of a list of leads in a target program. If member is not part of the program, member is added to the program. Required Permissions: Read-Write Lead
     */
    public function post(int $programId, \MarketoSDK\DTOs\Sync\ProgramMemberStatus\Request $payload): \MarketoSDK\DTOs\ResponseOf\ProgramMemberStatus
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ProgramMemberStatus $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['programId' => $programId]);
        return $result;
    }

}
