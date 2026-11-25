<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

final class HeaderField extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
    'value',
];

    /**
     * Field type
     */
    public string $type;
    /**
     * Value of field
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
