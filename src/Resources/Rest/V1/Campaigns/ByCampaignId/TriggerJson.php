<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Campaigns\ByCampaignId;

final class TriggerJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/campaigns/{campaignId}/trigger.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Campaign',
        'validation' => [
            'campaignId' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\TriggerCampaignRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Request Campaign
     *
     * Passes a set of leads to a trigger campaign to run through the campaign's flow. The designated campaign must have a Campaign is Requested: Web Service API trigger, and must be active. My tokens local to the campaign's parent program can be overridden for the run to customize content. A maximum of 100 leads are allowed per call. Required Permissions: Execute Campaign
     */
    public function post(int $campaignId, ?\MarketoSDK\DTOs\TriggerCampaignRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Campaign $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['campaignId' => $campaignId]) : $this->executeArguments(self::operation(self::POST), path: ['campaignId' => $campaignId]);
        return $result;
    }
}
