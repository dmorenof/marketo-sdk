<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SmartCampaignFlowStepActionType;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\CampaignFlowSteps> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\CampaignFlowSteps::class;
}
