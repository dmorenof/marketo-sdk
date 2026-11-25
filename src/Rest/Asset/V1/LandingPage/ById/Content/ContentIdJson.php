<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById\Content;

final class ContentIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/content/{contentId}.json [operationId: updateLandingPageContentUsingPOST] */
    /**
     * Update Landing Page Content Section
     *
     * Updates a content section the landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON). Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\Content\ContentIdJson $identifier, \MarketoSDK\DTOs\Update\LandingPageContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\Content\ContentIdJson::class)->post($identifier, $payload);
    }
}
