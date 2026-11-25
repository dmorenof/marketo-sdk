<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ChangeLeadProgramStatusRequest;

final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\LookupInputData::class;
}
