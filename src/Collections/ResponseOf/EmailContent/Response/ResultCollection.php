<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\EmailContent\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\Content\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\Content\Response::class;
}
