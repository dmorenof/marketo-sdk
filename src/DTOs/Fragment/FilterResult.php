<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Fragment;

/**
 * FragmentFilterResult
 */
final class FilterResult extends \MarketoSDK\DTOs\PageDetailsDTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'currentPage' => [
        'format' => 'int32',
    ],
    'pageSize' => [
        'format' => 'int32',
    ],
    'totalItems' => [
        'format' => 'int32',
    ],
];

    public \MarketoSDK\Collections\Fragment\FilterResult\ItemsCollection $items;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \MarketoSDK\Collections\Fragment\FilterResult\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Fragment\ContentDTO::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
