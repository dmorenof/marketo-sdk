<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\CampaignFlowStepActionType;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\RuleConstraint> */
final class ConstraintsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\RuleConstraint::class;
}
