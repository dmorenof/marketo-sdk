<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\CustomActivity\Type;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\CustomActivity\TypeAttribute> */
final class AttributesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\CustomActivity\TypeAttribute::class;
}
