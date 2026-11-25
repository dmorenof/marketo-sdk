<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Stats;

final class UsageJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/stats/usage.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\UsageData',
    ];

    /**
     * Get Daily Usage
     *
     * Returns the number of calls consumed for the day. Required Permissions: None
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\UsageData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\UsageData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
