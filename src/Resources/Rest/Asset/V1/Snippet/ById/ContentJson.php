<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById;

final class ContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/snippet/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SnippetContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Snippet Content
     *
     * Retrieves the content of the target snippet. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Snippet\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\SnippetContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SnippetContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/snippet/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Update Snippet Content
     *
     * Updates the content of the target snippet. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\PostParams\Rest\Asset\V1\Snippet\ById\ContentJson $params): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
