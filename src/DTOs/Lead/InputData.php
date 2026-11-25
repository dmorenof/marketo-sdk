<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

/**
 * Lead record containing only lead id
 */
final class InputData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    /**
     * Unique integer id of a lead record
     * Format: int64
     */
    public int $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
