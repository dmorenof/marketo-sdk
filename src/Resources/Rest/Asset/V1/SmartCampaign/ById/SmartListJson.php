<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById;

final class SmartListJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/{id}/smartList.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
    ];

    /**
     * Get Smart List by Smart Campaign Id
     *
     * Retrieves a Smart List record by its Smart Campaign id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById\SmartListJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
