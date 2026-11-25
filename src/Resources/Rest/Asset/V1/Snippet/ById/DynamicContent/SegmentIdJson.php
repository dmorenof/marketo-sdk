<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\DynamicContent;

final class SegmentIdJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
            'segmentId' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\SnippetDynamicContent\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Snippet Dynamic Content
     *
     * Updates the target dynamic content section. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Snippet\ById\DynamicContent\SegmentIdJson $identifier, \MarketoSDK\DTOs\Update\SnippetDynamicContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

}
