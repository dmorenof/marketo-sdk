<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Add\CustomObjectTypeFields\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Add\CustomObjectTypeField> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Add\CustomObjectTypeField::class;
}
