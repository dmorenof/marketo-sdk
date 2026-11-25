<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class LandingPagesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPages.json [operationId: browseLandingPagesUsingGET] */
    /**
     * Get Landing Pages
     *
     * Retrieves a list of accessible landing pages from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPagesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPagesJson::class)->get($params);
    }

    /** POST /rest/asset/v1/landingPages.json [operationId: createLandingPageUsingPOST] */
    /**
     * Create Landing Page
     *
     * Creates a new landing page. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\LandingPage\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPagesJson::class)->post($payload);
    }

}
