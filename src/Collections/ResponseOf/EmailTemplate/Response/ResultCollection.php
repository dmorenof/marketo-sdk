<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\EmailTemplate\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\Template\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\Template\Response::class;
}
