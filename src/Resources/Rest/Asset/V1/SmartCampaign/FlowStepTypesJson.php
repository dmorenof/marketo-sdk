<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartCampaign;

final class FlowStepTypesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/smartCampaign/flowStepTypes.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartCampaignFlowStepType',
    ];

    /**
     * Get Smart Campaign Flow Step Types
     *
     * Returns flow step types with constraint metadata. These are the subset valid for use as flow step choice conditions. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\SmartCampaignFlowStepType
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartCampaignFlowStepType $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
