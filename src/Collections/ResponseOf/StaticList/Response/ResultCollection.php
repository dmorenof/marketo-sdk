<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\StaticList\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\StaticListResponse> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\StaticListResponse::class;
}
