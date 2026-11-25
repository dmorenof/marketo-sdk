<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\RedirectRule;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/redirectRule/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageRedirectRules',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page Redirect Rule by Id
     *
     * Retrieves the landing page redirect rule record. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules
     */
    public function get(int $id): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/redirectRule/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageRedirectRules',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\LandingPageRedirectRule\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Landing Page Redirect Rule
     *
     * Update an existing landing page redirect rule. Required Permissions: Read Write Redirect Rules
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\LandingPageRedirectRule\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
