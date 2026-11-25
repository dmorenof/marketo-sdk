<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\ObjectDependentAssets;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ObjectDependentAsset> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ObjectDependentAsset::class;
}
