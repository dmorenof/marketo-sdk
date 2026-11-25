<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class ActivateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/activate.json [operationId: activateSmartCampaignUsingPOST] */
    /**
     * Activate Smart Campaign
     *
     * Activates a trigger smart campaign. Required Permissions: Activate Campaign
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\ActivateJson::class)->post($id);
    }

}
