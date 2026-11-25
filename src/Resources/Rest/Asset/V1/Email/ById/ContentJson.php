<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById;

final class ContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email Content
     *
     * Returns the content of the designated email. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\EmailComponentData\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Email Content
     *
     * Updates the content of an email. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\EmailComponentData\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
