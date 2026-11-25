<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ChangeLeadProgramStatusRequest;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\LookupInputData> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\LookupInputData::class;
}
