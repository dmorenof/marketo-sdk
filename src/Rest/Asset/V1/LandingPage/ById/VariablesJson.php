<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById;

final class VariablesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/landingPage/{id}/variables.json [operationId: getVariablesUsingGET] */
    /**
     * Get Landing Page Variables
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById\VariablesJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPageVariable\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\VariablesJson::class)->get($id, $params);
    }
}
