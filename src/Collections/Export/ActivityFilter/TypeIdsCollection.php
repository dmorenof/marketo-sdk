<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Export\ActivityFilter;

/** @extends \Dmorenof\SdkRuntime\TypedArray<int> */
final class TypeIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'integer';
    protected const array ITEM_VALIDATION = [
        'format' => 'int32',
    ];
}
