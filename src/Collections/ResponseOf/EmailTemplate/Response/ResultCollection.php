<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\EmailTemplate\Response;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\Template\Response::class;
}
