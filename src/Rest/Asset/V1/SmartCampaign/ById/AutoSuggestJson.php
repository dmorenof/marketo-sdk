<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class AutoSuggestJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/{id}/autoSuggest.json [operationId: getSmartCampaignAutoSuggestUsingGET] */
    /**
     * Get Auto Suggest for Smart Campaign
     *
     * Returns suggested values for configuring a flow step choice. Required Permissions: Read-Only Assets
     */
    public static function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById\AutoSuggestJson $params): \MarketoSDK\DTOs\ResponseOf\AutoSuggestValue
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\AutoSuggestJson::class)->get($id, $params);
    }

}
