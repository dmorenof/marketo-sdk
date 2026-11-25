<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\UsedBy\Response;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\UsedBy\ItemDTO::class;
}
