<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId;

final class ReorderJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/flow/{stepId}/choice/{choiceId}/reorder.json [operationId: reorderSmartCampaignFlowStepChoiceUsingPOST] */
    /**
     * Reorder Flow Step Choice
     *
     * Moves a choice to a new position within a flow step. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\ReorderJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\ReorderJson $params): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId\ReorderJson::class)->post($identifier, $params);
    }

}
