<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\EmailDynamicContent\Response;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\DynamicContent\Response::class;
}
