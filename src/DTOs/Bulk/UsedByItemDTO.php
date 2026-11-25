<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Bulk;

/**
 * BulkUsedByItemDTO
 */
final class UsedByItemDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'count' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of places the asset is used.
     * Format: int32
     */
    public int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    public string $id;
    public string $name;
    /**
     * Whether the asset is used by any other asset.
     */
    public bool $used;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'used' => is_bool($value) ? $this->used = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
