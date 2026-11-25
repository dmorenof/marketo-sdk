<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\FilterResult;

final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Email\ContentDTO::class;
}
