<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Email\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email By Id
     *
     * Returns an email record by its id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Email\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Email\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\EmailMetaData\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Email Metadata
     *
     * Updates the metadata of an email asset. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\EmailMetaData\Request $payload): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Email\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
