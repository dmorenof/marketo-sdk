<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Lists;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ListDTO> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ListDTO::class;
}
