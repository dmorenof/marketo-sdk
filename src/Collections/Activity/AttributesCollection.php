<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Activity;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Attribute> */
final class AttributesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Attribute::class;
}
