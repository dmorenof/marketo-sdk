<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Campaigns\ByCampaignId;

final class TriggerJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/campaigns/{campaignId}/trigger.json [operationId: triggerCampaignUsingPOST] */
    /**
     * Request Campaign
     *
     * Passes a set of leads to a trigger campaign to run through the campaign's flow. The designated campaign must have a Campaign is Requested: Web Service API trigger, and must be active. My tokens local to the campaign's parent program can be overridden for the run to customize content. A maximum of 100 leads are allowed per call. Required Permissions: Execute Campaign
     */
    public static function post(int $campaignId, ?\MarketoSDK\DTOs\TriggerCampaignRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Campaigns\ByCampaignId\TriggerJson::class)->post($campaignId);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Campaigns\ByCampaignId\TriggerJson::class)->post($campaignId, $payload);
    }

}
