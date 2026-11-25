<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class FullContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPage/{id}/fullContent.json [operationId: getLandingPageFullContentUsingGET] */
    /**
     * Get Landing Page Full Content
     *
     * Returns the serialized HTML version of the landing page. Required Permissions: Read-Only Assets, Read-Write Assets. If leadId is passed in the request: Read-Only Lead, Read-Write Lead.
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById\FullContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\GetLandingPageFullContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\FullContentJson::class)->get($id, $params);
    }
}
