<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class FilesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/files.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\File\\Response',
    ];

    /**
     * Get Files
     *
     * Returns the files from the given folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\FilesJson $params = null): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\File\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/files.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\File\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\File\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create File
     *
     * Creates a new file from the included payload. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\File\Request $payload): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\File\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
