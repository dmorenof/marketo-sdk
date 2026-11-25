<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ActivityType;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ActivityTypeAttribute> */
final class AttributesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ActivityTypeAttribute::class;
}
