<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\CreateLeadField;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\FieldStatus> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\FieldStatus::class;
}
