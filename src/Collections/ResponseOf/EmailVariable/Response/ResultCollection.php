<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\EmailVariable\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\Variable\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\Variable\Response::class;
}
