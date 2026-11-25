<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class CampaignsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/campaigns.json [operationId: getCampaignsUsingGET] */
    /**
     * Get Campaigns
     *
     * Returns a list of campaign records. Required Permissions: Read-Only Campaigns, Read-Write Campaigns<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/asset/#operation/getAllSmartCampaignsGET">Get Smart Campaigns</a> endpoint instead.
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\CampaignsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\CampaignsJson::class)->get($params);
    }
}
