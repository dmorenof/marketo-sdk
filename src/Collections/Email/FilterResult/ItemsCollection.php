<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\FilterResult;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\ContentDTO> */
final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\ContentDTO::class;
}
