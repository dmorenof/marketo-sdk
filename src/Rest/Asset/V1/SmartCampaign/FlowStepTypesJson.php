<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign;

final class FlowStepTypesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/smartCampaign/flowStepTypes.json [operationId: getSmartCampaignFlowStepTypesUsingGET] */
    /**
     * Get Smart Campaign Flow Step Types
     *
     * Returns flow step types with constraint metadata. These are the subset valid for use as flow step choice conditions. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\SmartCampaignFlowStepType
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\FlowStepTypesJson::class)->get();
    }

}
