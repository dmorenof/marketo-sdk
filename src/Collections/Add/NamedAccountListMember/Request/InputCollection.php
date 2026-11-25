<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Add\NamedAccountListMember\Request;

final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\NamedAccount::class;
}
