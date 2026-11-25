<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartList/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartListResponseWithRules',
    ];

    /**
     * Get Smart List by Id
     *
     * Retrieves a Smart List record by its id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartList\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
