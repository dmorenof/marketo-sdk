<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class RedirectRulesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/redirectRules.json [operationId: getLandingPageRedirectRulesUsingGET] */
    /**
     * Get Landing Page Redirect Rules
     *
     * Retrieves a list of landing page redirect rules from the target instance. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\RedirectRulesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\RedirectRulesJson::class)->get($params);
    }

    /** POST /rest/asset/v1/redirectRules.json [operationId: createLandingPageRedirectRuleUsingPOST] */
    /**
     * Create Landing Page Redirect Rule
     *
     * Create a new landing page redirect rule. Required Permissions: Read Write Redirect Rules
     */
    public static function post(\MarketoSDK\DTOs\Create\LandingPageRedirectRule\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\RedirectRulesJson::class)->post($payload);
    }
}
