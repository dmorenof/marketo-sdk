<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\CustomObject\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\CustomObject> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\CustomObject::class;
}
