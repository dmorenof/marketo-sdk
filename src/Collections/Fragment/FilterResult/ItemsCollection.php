<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Fragment\FilterResult;

final class ItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Fragment\ContentDTO::class;
}
