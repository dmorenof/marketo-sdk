<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Stats\Errors;

final class Last7daysJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/stats/errors/last7days.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ErrorsData',
    ];

    /**
     * Get Weekly Errors
     *
     * Returns a count of each error type they have encountered in the past 7 days. Required Permissions: None
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ErrorsData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ErrorsData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
