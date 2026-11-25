<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\ByLeadId;

final class ListMembershipJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/{leadId}/listMembership.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lists',
    ];

    /**
     * Get Lists by Lead Id
     *
     * Query static list membership for one lead. Required Permissions: Read-Only Asset
     */
    public function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId\ListMembershipJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lists
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lists $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['leadId' => $leadId], parameters: $params);
        return $result;
    }
}
