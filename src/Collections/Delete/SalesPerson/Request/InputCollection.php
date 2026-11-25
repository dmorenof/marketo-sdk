<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\SalesPerson\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\SalesPerson> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\SalesPerson::class;
}
