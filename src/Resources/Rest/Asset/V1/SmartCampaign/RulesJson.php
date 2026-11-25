<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign;

final class RulesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/rules.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignRuleType',
    ];

    /**
     * Get Smart Campaign Rules
     *
     * Returns all available trigger and filter rule types that can be used in smart campaign smart lists. Required Permissions: Read-Write Assets
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\SmartCampaignRuleType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignRuleType $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
