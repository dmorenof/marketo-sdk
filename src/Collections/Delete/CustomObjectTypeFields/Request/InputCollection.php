<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\CustomObjectTypeFields\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Delete\CustomObjectTypeField> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Delete\CustomObjectTypeField::class;
}
