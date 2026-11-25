<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class SmartListJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/{id}/smartList.json [operationId: getSmartListBySmartCampaignIdUsingGET] */
    /**
     * Get Smart List by Smart Campaign Id
     *
     * Retrieves a Smart List record by its Smart Campaign id. Required Permissions: Read-Asset or Read-Write Asset
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById\SmartListJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartListResponseWithRules
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\SmartListJson::class)->get($id, $params);
    }

}
