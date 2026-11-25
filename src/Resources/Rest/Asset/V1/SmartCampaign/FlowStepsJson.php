<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign;

final class FlowStepsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/flowSteps.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignFlowStepActionType',
    ];

    /**
     * Get Smart Campaign Flow Steps
     *
     * Returns all available flow step action types. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\SmartCampaignFlowStepActionType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignFlowStepActionType $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
