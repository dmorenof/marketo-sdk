<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\LandingPage\ById\Variable;

final class VariableIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/landingPage/{id}/variable/{variableId}.json [operationId: updateLandingPageVariableUsingPOST] */
    /**
     * Update Landing Page Variable
     *
     * Updates the value of the given variable. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\Variable\VariableIdJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\LandingPage\ById\Variable\VariableIdJson $params): \MarketoSDK\DTOs\ResponseOf\LandingPageVariable\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\LandingPage\ById\Variable\VariableIdJson::class)->post($identifier, $params);
    }
}
