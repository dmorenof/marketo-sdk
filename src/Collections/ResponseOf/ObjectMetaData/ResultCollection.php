<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\ObjectMetaData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ObjectMetaData> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ObjectMetaData::class;
}
