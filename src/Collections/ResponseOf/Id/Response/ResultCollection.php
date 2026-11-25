<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Id\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\IdResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\IdResponse::class;
}
