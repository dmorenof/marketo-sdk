<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class ChannelsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/channels.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Channel\\Response',
    ];

    /**
     * Get Channels
     *
     * Retrieves all channels. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\ChannelsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Channel\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Channel\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
