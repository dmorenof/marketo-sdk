<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\DynamicContent;

final class ContentIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageDynamicContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page Dynamic Content
     *
     * Retrieves the dynamic content from the target section. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson $identifier): \MarketoSDK\DTOs\ResponseOf\LandingPageDynamicContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageDynamicContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\LandingPageDynamicContent\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Landing Page Dynamic Content Section
     *
     * Updates the content of the target dynamic content section. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson $identifier, ?\MarketoSDK\DTOs\Update\LandingPageDynamicContent\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: $identifier) : $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }
}
