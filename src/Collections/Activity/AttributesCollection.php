<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Activity;

final class AttributesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Attribute::class;
}
