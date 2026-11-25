<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\AutoSuggestValue;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\AutoSuggestValue> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\AutoSuggestValue::class;
}
