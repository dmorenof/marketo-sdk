<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Snippet;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/snippet/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Snippet\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Snippet by Id
     *
     * Retrieves the target snippet record. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Snippet\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Snippet\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/snippet/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Snippet\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\Snippet\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Snippet Metadata
     *
     * Updates the metadata of the snippet. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\Snippet\Request $payload): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Snippet\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
