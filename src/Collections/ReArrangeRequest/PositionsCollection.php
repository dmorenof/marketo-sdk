<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ReArrangeRequest;

final class PositionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Update\FieldPosition::class;
}
