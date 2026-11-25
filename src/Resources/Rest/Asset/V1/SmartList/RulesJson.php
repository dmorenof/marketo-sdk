<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList;

final class RulesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartList/rules.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListRuleType',
    ];

    /**
     * Get Smart List Rules
     *
     * Returns all available filter rule types that can be used in smart lists. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\SmartListRuleType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListRuleType $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
