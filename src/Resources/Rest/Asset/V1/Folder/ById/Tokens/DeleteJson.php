<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Folder\ById\Tokens;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/folder/{id}/tokens/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\Token\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Token by Name
     *
     * Deletes a token with the given name from the parent folder. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Delete\Token\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
