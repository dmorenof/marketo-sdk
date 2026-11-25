<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById;

final class ContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPage/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page Content
     *
     * Retrieves the list of content sections in the target landing page. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPage/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\LandingPageContent\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Landing Page Content Section
     *
     * Adds a content section to the target landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON). Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Create\LandingPageContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
