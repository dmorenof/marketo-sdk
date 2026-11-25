<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class SmartCampaignsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaigns.json [operationId: getAllSmartCampaignsGET] */
    /**
     * Get Smart Campaigns
     *
     * Retrieves all smart campaigns. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaignsJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaignsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/smartCampaigns.json [operationId: createSmartCampaignUsingPOST] */
    /**
     * Create Smart Campaign
     *
     * Creates a new smart campaign. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\SmartCampaign\Request $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaignsJson::class)->post($payload);
    }
}
