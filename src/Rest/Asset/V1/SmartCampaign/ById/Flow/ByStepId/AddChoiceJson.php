<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId;

final class AddChoiceJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/flow/{stepId}/addChoice.json [operationId: addSmartCampaignFlowStepChoiceUsingPOST] */
    /**
     * Add Step Choice
     *
     * Adds a choice to an existing flow step. Use the Update Flow Step Choice endpoint to configure the choice condition and values. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\AddChoiceJson $identifier): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\AddChoiceJson::class)->post($identifier);
    }
}
