<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\Lead\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\InputData> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\InputData::class;
}
