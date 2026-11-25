<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Stats;

final class ErrorsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/stats/errors.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ErrorsData',
    ];

    /**
     * Get Daily Errors
     *
     * Retrieves a count of each error type they have encountered in the current day. Required Permissions: None
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\ErrorsData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ErrorsData $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
