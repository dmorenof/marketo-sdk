<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class RedirectRulesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/redirectRules.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageRedirectRules',
    ];

    /**
     * Get Landing Page Redirect Rules
     *
     * Retrieves a list of landing page redirect rules from the target instance. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\RedirectRulesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/redirectRules.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageRedirectRules',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\LandingPageRedirectRule\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Landing Page Redirect Rule
     *
     * Create a new landing page redirect rule. Required Permissions: Read Write Redirect Rules
     */
    public function post(\MarketoSDK\DTOs\Create\LandingPageRedirectRule\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
