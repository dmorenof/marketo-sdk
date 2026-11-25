<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById\Content\ByContentId;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json [operationId: removeLandingPageContentUsingPOST] */
    /**
     * Delete Landing Page Content Section
     *
     * Removes the target content section from the parent landing page. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\Content\ByContentId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\Content\ByContentId\DeleteJson::class)->post($identifier);
    }
}
