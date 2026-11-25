<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Folder;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/folder/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Folder\\Response',
    ];

    /**
     * Get Folder by Name
     *
     * Returns a folder record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\Folder\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Folder\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
