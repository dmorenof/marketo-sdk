<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class DeactivateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/deactivate.json [operationId: deactivateSmartCampaignUsingPOST] */
    /**
     * Deactivate Smart Campaign
     *
     * Deactivates a trigger smart campaign. Required Permissions: Deactivate Campaign
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\DeactivateJson::class)->post($id);
    }

}
