<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Programs;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Program> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Program::class;
}
