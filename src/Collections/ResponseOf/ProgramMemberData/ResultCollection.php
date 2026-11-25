<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\ProgramMemberData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ProgramMember\Status\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ProgramMember\Status\Response::class;
}
