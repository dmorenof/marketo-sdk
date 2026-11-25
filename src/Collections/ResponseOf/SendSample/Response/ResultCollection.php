<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SendSample\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\SendSampleResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\SendSampleResponse::class;
}
