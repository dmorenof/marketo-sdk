<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class LandingPageTemplatesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPageTemplates.json [operationId: getLandingPageTemplatesUsingGET] */
    /**
     * Get Landing Page Templates
     *
     * Retrieves the list of accessible landing page templates from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplatesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplatesJson::class)->get($params);
    }

    /** POST /rest/asset/v1/landingPageTemplates.json [operationId: createLpTemplateUsingPOST] */
    /**
     * Create Landing Page Template
     *
     * Creates a new landing page template. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\LpTemplate\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplatesJson::class)->post($payload);
    }

}
