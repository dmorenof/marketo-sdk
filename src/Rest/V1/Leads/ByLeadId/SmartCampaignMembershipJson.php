<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\ByLeadId;

final class SmartCampaignMembershipJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/{leadId}/smartCampaignMembership.json [operationId: getSmartCampaignMembershipUsingGET] */
    /**
     * Get Smart Campaigns by Lead Id
     *
     * Query smart campaign membership for one lead. Required Permissions: Read-Only Asset
     */
    public static function get(int $leadId, ?\MarketoSDK\GetParams\Rest\V1\Leads\ByLeadId\SmartCampaignMembershipJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaigns
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\ByLeadId\SmartCampaignMembershipJson::class)->get($leadId, $params);
    }

}
