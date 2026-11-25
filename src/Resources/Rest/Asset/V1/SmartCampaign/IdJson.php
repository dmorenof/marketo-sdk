<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignResponseWithFlow',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Smart Campaign by Id
     *
     * Returns the smart campaign for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaign\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\SmartCampaign\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Smart Campaign
     *
     * Update the smart campaign for the given id. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\SmartCampaign\Request $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
