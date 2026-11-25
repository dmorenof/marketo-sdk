<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Create\LeadField\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Create\LeadField> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Create\LeadField::class;
}
