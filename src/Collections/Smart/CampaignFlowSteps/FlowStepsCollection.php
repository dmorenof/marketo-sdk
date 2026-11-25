<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\CampaignFlowSteps;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\CampaignFlowStepActionType> */
final class FlowStepsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\CampaignFlowStepActionType::class;
}
