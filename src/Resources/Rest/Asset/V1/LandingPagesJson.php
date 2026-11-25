<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class LandingPagesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPages.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPage\\Response',
    ];

    /**
     * Get Landing Pages
     *
     * Retrieves a list of accessible landing pages from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPagesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPage\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPages.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPage\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\LandingPage\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Landing Page
     *
     * Creates a new landing page. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\LandingPage\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPage\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
