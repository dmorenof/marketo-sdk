<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\EmailModule\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\Module\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\Module\Response::class;
}
