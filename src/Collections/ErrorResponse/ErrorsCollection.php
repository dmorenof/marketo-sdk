<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ErrorResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ContentWaveErrorDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ContentWaveErrorDTO::class;
}
