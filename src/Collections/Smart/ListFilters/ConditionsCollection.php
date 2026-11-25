<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\ListFilters;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\ListConditions> */
final class ConditionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\ListConditions::class;
}
