<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

final class MapAttribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array PROPERTY_MAP = [
        'readOnly' => 'readOnly_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'readOnly_' => 'readOnly',
    ];

    /**
     * Name of the attribute
     */
    public string $name;
    /**
     * Whether the attribute is read only
     * Example: false
     */
    public bool $readOnly_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'readOnly' => is_bool($value) ? $this->readOnly_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
