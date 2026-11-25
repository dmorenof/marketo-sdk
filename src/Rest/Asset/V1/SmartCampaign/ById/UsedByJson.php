<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class UsedByJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/{id}/usedBy.json [operationId: getSmartCampaignUsedByUsingGET] */
    /**
     * Get Smart Campaign Used By
     *
     * Returns a list of assets that reference the specified smart campaign. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById\UsedByJson $params = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaignUsedBy
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\UsedByJson::class)->get($id, $params);
    }
}
