<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPage/{id}.json [operationId: getLandingPageByIdUsingGET] */
    /**
     * Get Landing Page by Id
     *
     * Returns the landing record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/landingPage/{id}.json [operationId: updateLandingPageUsingPOST] */
    /**
     * Update Landing Page Metadata
     *
     * Updates the metadata for the targe landing page. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\LandingPage\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\IdJson::class)->post($id, $payload);
    }
}
