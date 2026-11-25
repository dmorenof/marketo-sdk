<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\File;

final class Range extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: int64
     */
    public int $end;
    /**
     * Format: int64
     */
    public int $start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => is_int($value) ? $this->end = $value : parent::assignMember($name, $value),
            'start' => is_int($value) ? $this->start = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
