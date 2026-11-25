<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPageTemplate/{id}.json [operationId: getLandingPageTemplateByIdUsingGET] */
    /**
     * Get Landing Page Template by Id
     *
     * Retrieves the record for the target landing page template. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplate\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/landingPageTemplate/{id}.json [operationId: updateLpTemplateUsingPOST] */
    /**
     * Update Landing Page Template Metadata
     *
     * Updates the metadata for the target landing page template. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\LpTemplate\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\IdJson::class)->post($id, $payload);
    }
}
