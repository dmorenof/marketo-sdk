<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Channel;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/channel/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Channel\\Response',
    ];

    /**
     * Get Channel by Name
     *
     * Retrieves channels based on the provided name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\Channel\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Channel\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Channel\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
