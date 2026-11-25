<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Programs\ByProgramId\Members;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/programs/{programId}/members/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ProgramMemberDelete',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\ProgramMember\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Program Members
     *
     * Delete a list of members from the destination instance. Required Permissions: Read-Write Lead
     */
    public function post(int $programId, \MarketoSDK\DTOs\Delete\ProgramMember\Request $payload): \MarketoSDK\DTOs\ResponseOf\ProgramMemberDelete
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ProgramMemberDelete $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['programId' => $programId]);
        return $result;
    }
}
