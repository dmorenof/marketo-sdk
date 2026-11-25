<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\ByLeadId;

final class SmartCampaignMembershipJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/{leadId}/smartCampaignMembership.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaigns',
    ];

    /**
     * Get Smart Campaigns by Lead Id
     *
     * Query smart campaign membership for one lead. Required Permissions: Read-Only Asset
     */
    public function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId\SmartCampaignMembershipJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaigns
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaigns $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['leadId' => $leadId], parameters: $params);
        return $result;
    }

}
