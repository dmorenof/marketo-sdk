<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\ProgramMemberAttributes;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ProgramMember\Attribute> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember\Attribute::class;
}
