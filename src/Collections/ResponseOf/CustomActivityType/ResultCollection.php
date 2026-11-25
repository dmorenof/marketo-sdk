<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\CustomActivityType;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\CustomActivity\Type> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\CustomActivity\Type::class;
}
