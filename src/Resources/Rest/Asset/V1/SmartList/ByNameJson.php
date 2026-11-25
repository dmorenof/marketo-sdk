<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartList/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartList\\Response',
    ];

    /**
     * Get Smart List by Name
     *
     * Retrieves a Smart List record by its name. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\SmartList\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartList\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
