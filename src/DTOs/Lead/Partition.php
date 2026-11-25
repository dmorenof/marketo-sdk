<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

final class Partition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Description of the partition
     */
    public string $description;
    /**
     * Unique integer id of the partition
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the partition
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
