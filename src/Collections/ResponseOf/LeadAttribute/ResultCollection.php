<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\LeadAttribute;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\Attribute> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\Attribute::class;
}
