<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\CCFields> */
final class CcFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\CCFields::class;
}
