<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\FragmentNewResponse;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Fragment\DetailDTO::class;
}
