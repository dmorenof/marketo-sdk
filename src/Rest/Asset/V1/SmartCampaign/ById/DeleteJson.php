<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/delete.json [operationId: deleteSmartCampaignUsingPOST] */
    /**
     * Delete Smart Campaign
     *
     * Deletes a smart campaign. Required Permissions: Read-Write Assets
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\DeleteJson::class)->post($id);
    }

}
