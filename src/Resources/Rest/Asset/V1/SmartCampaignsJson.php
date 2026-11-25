<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class SmartCampaignsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaigns.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaign\\Response',
    ];

    /**
     * Get Smart Campaigns
     *
     * Retrieves all smart campaigns. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaignsJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaigns.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaign\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\SmartCampaign\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Smart Campaign
     *
     * Creates a new smart campaign. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\SmartCampaign\Request $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
