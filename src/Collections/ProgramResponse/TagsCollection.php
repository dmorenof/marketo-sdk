<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ProgramResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Tags> */
final class TagsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Tags::class;
}
