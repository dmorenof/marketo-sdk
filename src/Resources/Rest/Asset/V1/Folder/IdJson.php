<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Folder;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/folder/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Folder\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Folder by Id
     *
     * Returns the folder record with the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\Folder\IdJson $params): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Folder\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/folder/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Folder\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\Folder\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Folder Metadata
     *
     * Updates the metadata for a given folder. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\Folder\Request $payload): \MarketoSDK\DTOs\ResponseOf\Folder\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Folder\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
