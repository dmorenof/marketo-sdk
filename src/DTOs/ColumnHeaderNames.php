<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ColumnHeaderNames extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'value',
];

    /**
     * REST API name for header field
     */
    public string $name;
    /**
     * Value for header field
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
