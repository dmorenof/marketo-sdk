<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Folder\ById;

final class TokensJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/folder/{id}/tokens.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Token\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Tokens by Folder Id
     *
     * Retrieves the list of available My Tokens in the target folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Folder\ById\TokensJson $params = null): \MarketoSDK\DTOs\ResponseOf\Token\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Token\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/folder/{id}/tokens.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Token\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\Token\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Token
     *
     * Create or update a token in the parent folder. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Create\Token\Request $payload): \MarketoSDK\DTOs\ResponseOf\Token\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Token\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
