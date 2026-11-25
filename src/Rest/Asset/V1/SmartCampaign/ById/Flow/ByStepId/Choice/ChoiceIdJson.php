<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice;

final class ChoiceIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}.json [operationId: updateSmartCampaignFlowStepChoiceUsingPOST] */
    /**
     * Update Flow Step Choice
     *
     * Updates a flow step choice's condition and attribute values. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson $identifier, ?\MarketoSDK\Requests\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson\Post $payload = null): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson::class)->post($identifier, $payload);
    }
}
