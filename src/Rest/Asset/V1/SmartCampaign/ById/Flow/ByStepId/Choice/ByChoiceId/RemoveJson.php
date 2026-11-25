<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId;

final class RemoveJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}/remove.json [operationId: removeSmartCampaignFlowStepChoiceUsingPOST] */
    /**
     * Remove Flow Step Choice
     *
     * Removes a specific choice from a flow step. The default choice cannot be removed. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\RemoveJson $identifier): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\RemoveJson::class)->post($identifier);
    }

}
