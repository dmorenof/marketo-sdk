<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign;

final class RulesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/rules.json [operationId: getSmartCampaignRulesUsingGET] */
    /**
     * Get Smart Campaign Rules
     *
     * Returns all available trigger and filter rule types that can be used in smart campaign smart lists. Required Permissions: Read-Write Assets
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\SmartCampaignRuleType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\RulesJson::class)->get();
    }

}
