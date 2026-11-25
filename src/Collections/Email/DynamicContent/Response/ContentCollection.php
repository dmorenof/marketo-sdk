<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\DynamicContent\Response;

final class ContentCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\DynamicContentItem::class;
}
