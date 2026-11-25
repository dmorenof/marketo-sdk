<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\LeadPartition;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Lead\Partition> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Lead\Partition::class;
}
