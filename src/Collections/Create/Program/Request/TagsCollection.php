<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Create\Program\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Tag\Request> */
final class TagsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Tag\Request::class;
}
