<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\StaticList;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/staticList/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList\\Response',
    ];

    /**
     * Get Static List by Name
     *
     * Retrieves a Static List record by its name. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\StaticList\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
