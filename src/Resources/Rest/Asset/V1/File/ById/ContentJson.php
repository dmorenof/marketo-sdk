<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\File\ById;

final class ContentJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/file/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\File\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\FileContent\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update File Content
     *
     * Replaces the current content of the file with the included payload. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\FileContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\File\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
