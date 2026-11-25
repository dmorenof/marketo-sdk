<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\RedirectRule;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/redirectRule/{id}.json [operationId: getLandingPageRedirectRuleByIdUsingGET] */
    /**
     * Get Landing Page Redirect Rule by Id
     *
     * Retrieves the landing page redirect rule record. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules
     */
    public static function get(int $id): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\RedirectRule\IdJson::class)->get($id);
    }

    /** POST /rest/asset/v1/redirectRule/{id}.json [operationId: updateLandingPageRedirectRuleUsingPOST] */
    /**
     * Update Landing Page Redirect Rule
     *
     * Update an existing landing page redirect rule. Required Permissions: Read Write Redirect Rules
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\LandingPageRedirectRule\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPageRedirectRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\RedirectRule\IdJson::class)->post($id, $payload);
    }

}
