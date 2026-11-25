<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Stats\Usage;

final class Last7daysJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/stats/usage/last7days.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\UsageData',
    ];

    /**
     * Get Weekly Usage
     *
     * Returns the number of calls consumed in the past 7 days. Required Permissions: None
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\UsageData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\UsageData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
