<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\UsageData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\User\Count> */
final class UsersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\User\Count::class;
}
