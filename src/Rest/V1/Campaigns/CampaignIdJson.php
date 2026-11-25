<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Campaigns;

final class CampaignIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/campaigns/{campaignId}.json [operationId: getCampaignByIdUsingGET] */
    /**
     * Get Campaign By Id
     *
     * Returns the record of a campaign by its id. Required Permissions: Read-Only Campaigns, Read-Write Campaigns<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/asset/#operation/getSmartCampaignByIdUsingGET">Get Smart Campaign by Id</a> endpoint instead.
     */
    public static function get(int $campaignId): \MarketoSDK\DTOs\ResponseOf\Campaign
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Campaigns\CampaignIdJson::class)->get($campaignId);
    }

}
