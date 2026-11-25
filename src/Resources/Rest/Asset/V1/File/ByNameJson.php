<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\File;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/file/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\File\\Response',
    ];

    /**
     * Get File by Name
     *
     * Returns files records for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\File\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\File\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
