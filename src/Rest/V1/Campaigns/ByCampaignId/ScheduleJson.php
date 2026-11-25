<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Campaigns\ByCampaignId;

final class ScheduleJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/campaigns/{campaignId}/schedule.json [operationId: scheduleCampaignUsingPOST] */
    /**
     * Schedule Campaign
     *
     * Remotely schedules a batch campaign to run at a given time. My tokens local to the campaign's parent program can be overridden for the run to customize content. When using the "cloneToProgramName" parameter described below, this endpoint is limited to 20 calls per day. Required Permissions: Execute Campaign
     */
    public static function post(int $campaignId, ?\MarketoSDK\DTOs\ScheduleCampaignRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Campaigns\ByCampaignId\ScheduleJson::class)->post($campaignId);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Campaigns\ByCampaignId\ScheduleJson::class)->post($campaignId, $payload);
    }

}
