<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPage/{id}/content.json [operationId: getLandingPageContentUsingGET] */
    /**
     * Get Landing Page Content
     *
     * Retrieves the list of content sections in the target landing page. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\ContentJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/landingPage/{id}/content.json [operationId: addLandingPageContentUsingPOST] */
    /**
     * Add Landing Page Content Section
     *
     * Adds a content section to the target landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON). Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Create\LandingPageContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\ContentJson::class)->post($id, $payload);
    }
}
