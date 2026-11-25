<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\ActivityType;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ActivityType> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ActivityType::class;
}
