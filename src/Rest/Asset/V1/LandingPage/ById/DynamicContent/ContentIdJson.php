<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById\DynamicContent;

final class ContentIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json [operationId: getLandingPageDynamicContentsUsingGET] */
    /**
     * Get Landing Page Dynamic Content
     *
     * Retrieves the dynamic content from the target section. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson $identifier): \MarketoSDK\DTOs\ResponseOf\LandingPageDynamicContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson::class)->get($identifier);
    }

    /** POST /rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json [operationId: updateLandingPageDynamicContentUsingPOST] */
    /**
     * Update Landing Page Dynamic Content Section
     *
     * Updates the content of the target dynamic content section. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson $identifier, ?\MarketoSDK\DTOs\Update\LandingPageDynamicContent\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson::class)->post($identifier);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\DynamicContent\ContentIdJson::class)->post($identifier, $payload);
    }

}
