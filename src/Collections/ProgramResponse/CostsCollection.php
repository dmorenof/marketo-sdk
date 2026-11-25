<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ProgramResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Costs> */
final class CostsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Costs::class;
}
