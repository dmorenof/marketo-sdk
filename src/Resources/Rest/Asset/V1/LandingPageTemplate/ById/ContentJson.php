<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById;

final class ContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPageTemplate/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplateGetContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page Template Content
     *
     * Retrieves the content of the target landing page. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpTemplateGetContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplateGetContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPageTemplate/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'content' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Update Landing Page Template Content
     *
     * Updates the content for the target landing page template. This update is destructive for the draft version of the template. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }

}
