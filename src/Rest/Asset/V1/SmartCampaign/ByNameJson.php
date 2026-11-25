<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/byName.json [operationId: getSmartCampaignByNameUsingGET] */
    /**
     * Get Smart Campaign by Name
     *
     * Returns the smart campaign for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ByNameJson::class)->get($params);
    }

}
