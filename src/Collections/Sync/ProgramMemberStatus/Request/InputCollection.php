<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Sync\ProgramMemberStatus\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ProgramMember\Status> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember\Status::class;
}
