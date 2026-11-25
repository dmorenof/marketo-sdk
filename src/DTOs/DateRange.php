<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class DateRange extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * End of date range filter (ISO 8601-format)
     */
    public string $endAt;
    /**
     * Start of date range filter (ISO-8601 format)
     */
    public string $startAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'endAt' => is_string($value) ? $this->endAt = $value : parent::assignMember($name, $value),
            'startAt' => is_string($value) ? $this->startAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
