<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Program\Members;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/program/members/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ProgramMemberAttributes',
    ];

    /**
     * Describe Program Member
     *
     * Returns metadata about program member objects in the target instance, including a list of all fields available for interaction via the APIs. Required Permissions: Read-Only Lead, Read-Write Lead<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/mapi/#operation/describeProgramMemberUsingGET2">Describe Program Member</a> endpoint instead.
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ProgramMemberAttributes
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ProgramMemberAttributes $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
