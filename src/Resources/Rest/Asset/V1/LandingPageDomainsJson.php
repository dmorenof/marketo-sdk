<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class LandingPageDomainsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPageDomains.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPageDomains',
    ];

    /**
     * Get Landing Page Domains
     *
     * Retrieves a list of landing page domain and domain aliases. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageDomainsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageDomains
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPageDomains $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
