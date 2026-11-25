<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\ByLeadId;

final class ProgramMembershipJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/{leadId}/programMembership.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Programs',
        'querySerialization' => [
            'filterValues' => 'multi',
        ],
    ];

    /**
     * Get Programs by Lead Id
     *
     * Query program membership for one lead. Required Permissions: Read-Only Asset
     */
    public function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId\ProgramMembershipJson $params = null): \MarketoSDK\DTOs\ResponseOf\Programs
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Programs $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['leadId' => $leadId], parameters: $params);
        return $result;
    }
}
