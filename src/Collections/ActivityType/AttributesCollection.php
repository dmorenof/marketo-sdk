<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ActivityType;

final class AttributesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ActivityTypeAttribute::class;
}
