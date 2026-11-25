<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class LandingPageTemplatesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPageTemplates.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplate\\Response',
    ];

    /**
     * Get Landing Page Templates
     *
     * Retrieves the list of accessible landing page templates from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplatesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPageTemplates.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplate\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\LpTemplate\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Landing Page Template
     *
     * Creates a new landing page template. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\LpTemplate\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
