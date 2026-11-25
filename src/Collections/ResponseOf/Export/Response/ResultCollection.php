<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\Export\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Export\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Export\Response::class;
}
