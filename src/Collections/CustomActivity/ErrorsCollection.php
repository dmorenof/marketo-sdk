<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\CustomActivity;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Error> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Error::class;
}
