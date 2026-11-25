<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId;

final class RemoveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/flow/{stepId}/remove.json [operationId: removeSmartCampaignFlowStepUsingPOST] */
    /**
     * Remove Flow Step
     *
     * Removes a flow step and all its choices from a smart campaign. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\RemoveJson $identifier): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\RemoveJson::class)->post($identifier);
    }
}
