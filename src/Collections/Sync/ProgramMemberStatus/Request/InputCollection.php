<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Sync\ProgramMemberStatus\Request;

final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember\Status::class;
}
