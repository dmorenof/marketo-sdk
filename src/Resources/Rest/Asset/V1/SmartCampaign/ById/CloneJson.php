<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartCampaign/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaign\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneSmartCampaignRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Smart Campaign
     *
     * Clones a smart campaign. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneSmartCampaignRequest $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
