<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Lead\Attribute2;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\Collections\StringCollection> */
final class SearchableFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\Collections\StringCollection::class;
}
