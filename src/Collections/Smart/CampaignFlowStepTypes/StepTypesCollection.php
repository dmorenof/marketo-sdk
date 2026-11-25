<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\CampaignFlowStepTypes;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\CampaignFlowStepType> */
final class StepTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\CampaignFlowStepType::class;
}
