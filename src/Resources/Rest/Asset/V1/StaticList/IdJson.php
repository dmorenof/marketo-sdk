<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\StaticList;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/staticList/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList\\Response',
    ];

    /**
     * Get Static List by Id
     *
     * Retrieves a Static List record by its id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public function get(int $id): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/staticList/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\StaticList\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\StaticList\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Static List Metadata
     *
     * Updates the metadata of a static list asset. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\StaticList\Request $payload): \MarketoSDK\DTOs\ResponseOf\StaticList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\StaticList\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
