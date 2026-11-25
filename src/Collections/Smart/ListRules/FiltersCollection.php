<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\ListRules;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\ListFilters> */
final class FiltersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\ListFilters::class;
}
