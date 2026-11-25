<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Segmentation\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\SegmentationResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\SegmentationResponse::class;
}
