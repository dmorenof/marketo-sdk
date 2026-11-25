<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\FlowStep;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\FlowStepChoice> */
final class StepChoiceCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\FlowStepChoice::class;
}
