<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById;

final class AutoSuggestJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/{id}/autoSuggest.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\AutoSuggestValue',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Auto Suggest for Smart Campaign
     *
     * Returns suggested values for configuring a flow step choice. Required Permissions: Read-Only Assets
     */
    public function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById\AutoSuggestJson $params): \MarketoSDK\DTOs\ResponseOf\AutoSuggestValue
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\AutoSuggestValue $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
