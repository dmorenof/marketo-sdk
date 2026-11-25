<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\TokenResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\TokenDTO> */
final class TokensCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\TokenDTO::class;
}
