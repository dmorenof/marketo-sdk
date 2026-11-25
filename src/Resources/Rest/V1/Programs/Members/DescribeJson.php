<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Programs\Members;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/programs/members/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ProgramMemberAttributes2',
    ];

    /**
     * Describe Program Member
     *
     * Returns metadata about program member objects in the target instance, including a list of all fields available for interaction via the APIs. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ProgramMemberAttributes2
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ProgramMemberAttributes2 $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
