<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\CustomActivity\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\CustomActivity> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\CustomActivity::class;
}
