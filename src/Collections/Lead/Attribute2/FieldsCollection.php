<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Lead\Attribute2;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\Attribute2Fields> */
final class FieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\Attribute2Fields::class;
}
