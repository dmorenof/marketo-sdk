<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Create\Program\Request;

final class TagsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Tag\Request::class;
}
