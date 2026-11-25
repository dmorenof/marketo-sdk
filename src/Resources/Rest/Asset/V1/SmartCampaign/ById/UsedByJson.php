<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById;

final class UsedByJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/{id}/usedBy.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignUsedBy',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Smart Campaign Used By
     *
     * Returns a list of assets that reference the specified smart campaign. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById\UsedByJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaignUsedBy
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignUsedBy $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
