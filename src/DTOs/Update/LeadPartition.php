<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update;

final class LeadPartition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'partitionName',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique integer id of a lead record
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
    public string $partitionName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'partitionName' => is_string($value) ? $this->partitionName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
