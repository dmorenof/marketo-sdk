<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\EmailNewResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\DetailDTO> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\DetailDTO::class;
}
