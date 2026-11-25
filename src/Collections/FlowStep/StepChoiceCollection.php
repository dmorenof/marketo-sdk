<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\FlowStep;

final class StepChoiceCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\FlowStepChoice::class;
}
