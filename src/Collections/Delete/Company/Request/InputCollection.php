<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Delete\Company\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Company> */
final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Company::class;
}
