<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\NamedAccountList\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\NamedAccountList> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\NamedAccountList::class;
}
