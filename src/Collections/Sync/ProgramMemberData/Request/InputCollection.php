<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Sync\ProgramMemberData\Request;

final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember\Data::class;
}
