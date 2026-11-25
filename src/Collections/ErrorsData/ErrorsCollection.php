<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ErrorsData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ErrorCount> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ErrorCount::class;
}
