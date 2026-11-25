<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Programs\ByProgramId;

final class MembersJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/programs/{programId}/members.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ProgramMember',
        'querySerialization' => [
            'fields' => 'multi',
            'filterValues' => 'multi',
        ],
    ];

    /**
     * Get Program Members
     *
     * Returns a list of up to 300 program members on a list of values in a particular field. If you specify a filterType that is a custom field, the custom field’s dataType must be either “string” or “integer”. If you specify a filterType other than “leadId”, a maximum of 100,000 program member records can be processed by the request. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(int $programId, \MarketoSDK\GetParams\Rest\V1\Programs\ByProgramId\MembersJson $params): \MarketoSDK\DTOs\ResponseOf\ProgramMember
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ProgramMember $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['programId' => $programId], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/programs/{programId}/members.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ProgramMemberData',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Sync\\ProgramMemberData\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Sync Program Member Data
     *
     * Changes the program member data of a list of leads in a target program. Only existing members of the program may have their data changed with this API. Required Permissions: Read-Write Lead
     */
    public function post(int $programId, \MarketoSDK\DTOs\Sync\ProgramMemberData\Request $payload): \MarketoSDK\DTOs\ResponseOf\ProgramMemberData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ProgramMemberData $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['programId' => $programId]);
        return $result;
    }

}
