<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\FragmentNewResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Fragment\DetailDTO> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Fragment\DetailDTO::class;
}
