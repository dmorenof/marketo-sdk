<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPageTemplate/{id}/content.json [operationId: getLandingPageTemplateContentUsingGET] */
    /**
     * Get Landing Page Template Content
     *
     * Retrieves the content of the target landing page. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpTemplateGetContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/landingPageTemplate/{id}/content.json [operationId: updateLandingPageTemplateContentUsingPOST] */
    /**
     * Update Landing Page Template Content
     *
     * Updates the content for the target landing page template. This update is destructive for the draft version of the template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson::class)->post($id, $payload);
    }

}
