<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Add\NamedAccountListMember\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\NamedAccount> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\NamedAccount::class;
}
