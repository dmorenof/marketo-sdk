<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\PushLeadToMarketoRequest;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\PushLead> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\PushLead::class;
}
