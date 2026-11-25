<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ReArrangeRequest;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Update\FieldPosition> */
final class PositionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Update\FieldPosition::class;
}
