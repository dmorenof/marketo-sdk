<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign;

final class FlowStepsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/flowSteps.json [operationId: getSmartCampaignFlowStepsUsingGET] */
    /**
     * Get Smart Campaign Flow Steps
     *
     * Returns all available flow step action types. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\SmartCampaignFlowStepActionType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\FlowStepsJson::class)->get();
    }

}
