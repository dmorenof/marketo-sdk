<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Campaigns\ByCampaignId;

final class ScheduleJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/campaigns/{campaignId}/schedule.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Campaign',
        'validation' => [
            'campaignId' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\ScheduleCampaignRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Schedule Campaign
     *
     * Remotely schedules a batch campaign to run at a given time. My tokens local to the campaign's parent program can be overridden for the run to customize content. When using the "cloneToProgramName" parameter described below, this endpoint is limited to 20 calls per day. Required Permissions: Execute Campaign
     */
    public function post(int $campaignId, ?\MarketoSDK\DTOs\ScheduleCampaignRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Campaign $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['campaignId' => $campaignId]) : $this->executeArguments(self::operation(self::POST), path: ['campaignId' => $campaignId]);
        return $result;
    }

}
