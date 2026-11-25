<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Activity;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Warning> */
final class WarningsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Warning::class;
}
