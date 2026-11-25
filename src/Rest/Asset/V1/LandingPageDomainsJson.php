<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class LandingPageDomainsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPageDomains.json [operationId: getLandingPageDomainsUsingGET] */
    /**
     * Get Landing Page Domains
     *
     * Retrieves a list of landing page domain and domain aliases. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageDomainsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageDomains
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageDomainsJson::class)->get($params);
    }
}
