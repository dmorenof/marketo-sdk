<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\ProgramMember;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ProgramMember> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember::class;
}
