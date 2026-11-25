<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Flow;

final class StepsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\FlowStep::class;
}
