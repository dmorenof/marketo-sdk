<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/{id}.json [operationId: getSmartCampaignByIdUsingGET] */
    /**
     * Get Smart Campaign by Id
     *
     * Returns the smart campaign for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/smartCampaign/{id}.json [operationId: updateSmartCampaignUsingPOST] */
    /**
     * Update Smart Campaign
     *
     * Update the smart campaign for the given id. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\SmartCampaign\Request $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\IdJson::class)->post($id, $payload);
    }

}
