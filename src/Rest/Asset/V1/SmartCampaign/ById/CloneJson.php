<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/clone.json [operationId: cloneSmartCampaignUsingPOST] */
    /**
     * Clone Smart Campaign
     *
     * Clones a smart campaign. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\CloneSmartCampaignRequest $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaign\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\CloneJson::class)->post($id, $payload);
    }
}
