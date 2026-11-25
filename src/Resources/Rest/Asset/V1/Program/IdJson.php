<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/program/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Program\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Program by Id
     *
     * Retrieves the program record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Program\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/program/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Program\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\Program\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Program Metadata
     *
     * Updates the target program's metadata. The channel may be updated after creation; doing so keeps Program Settings Channel and the Channel tag in sync, and is rejected if a child campaign uses a Change Program Status flow step. The type may only be set at creation. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\Program\Request $payload): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Program\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
