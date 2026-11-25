<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOfobject;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\ResponseOfobject\ResultDTO> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ResponseOfobject\ResultDTO::class;
}
