<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class FoldersJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/folders.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Folder\\Response',
    ];

    /**
     * Get Folders
     *
     * Retrieves child folders from within a given root folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\FoldersJson $params = null): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Folder\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/folders.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Folder\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\Folder\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Folder
     *
     * Creates a new folder. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\Folder\Request $payload): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Folder\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
