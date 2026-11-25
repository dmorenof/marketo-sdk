<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Create\Program\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\CostRequest> */
final class CostsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\CostRequest::class;
}
