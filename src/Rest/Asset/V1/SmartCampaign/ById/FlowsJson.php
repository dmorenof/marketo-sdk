<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartCampaign\ById;

final class FlowsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartCampaign/{id}/flows.json [operationId: addSmartCampaignFlowStepUsingPOST] */
    /**
     * Add Flow Step
     *
     * Adds a flow step to a smart campaign. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\Requests\Rest\Asset\V1\SmartCampaign\ById\FlowsJson\Post $payload): \MarketoSDK\DTOs\ResponseOf\SmartCampaignResponseWithFlow
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign\ById\FlowsJson::class)->post($id, $payload);
    }

}
