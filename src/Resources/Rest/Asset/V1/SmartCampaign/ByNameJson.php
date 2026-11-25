<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignResponseWithFlow',
    ];

    /**
     * Get Smart Campaign by Name
     *
     * Returns the smart campaign for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
