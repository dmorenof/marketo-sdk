<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Bulk\UsedBy\Response;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Bulk\UsedByItemDTO::class;
}
