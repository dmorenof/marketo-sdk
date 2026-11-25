<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class CustomObjectTypeFieldRelatedTo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'field',
        'name',
    ];

    /**
     * Foreign field to which the parent is linked
     */
    public string $field;
    /**
     * Name of linkable object type
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
