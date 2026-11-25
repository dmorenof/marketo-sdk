<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPage/byName.json [operationId: getLandingPageByNameUsingGET] */
    /**
     * Get Landing Page by Name
     *
     * Returns the landing page record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ByNameJson::class)->get($params);
    }
}
