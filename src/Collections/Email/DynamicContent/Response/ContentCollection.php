<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\DynamicContent\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Email\DynamicContentItem> */
final class ContentCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\DynamicContentItem::class;
}
