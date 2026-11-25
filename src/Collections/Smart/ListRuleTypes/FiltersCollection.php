<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\ListRuleTypes;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\ListRuleType> */
final class FiltersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\ListRuleType::class;
}
