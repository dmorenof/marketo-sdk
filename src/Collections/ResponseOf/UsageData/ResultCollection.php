<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\UsageData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\UsageData> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\UsageData::class;
}
