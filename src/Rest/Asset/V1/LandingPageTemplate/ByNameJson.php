<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPageTemplate;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPageTemplate/byName.json [operationId: getLandingPageTemplateByNameUsingGET] */
    /**
     * Get Landing Page Template by Name
     *
     * Retrieves the landing page template record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\LandingPageTemplate\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ByNameJson::class)->get($params);
    }

}
