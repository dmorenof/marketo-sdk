<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\ProgramMember\Request;

final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember\Delete::class;
}
