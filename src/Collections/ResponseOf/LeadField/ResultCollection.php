<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\LeadField;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\Field> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\Field::class;
}
