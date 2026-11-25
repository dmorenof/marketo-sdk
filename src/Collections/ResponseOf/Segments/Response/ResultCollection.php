<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Segments\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\SegmentsResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\SegmentsResponse::class;
}
