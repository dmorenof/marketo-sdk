<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email\Variable;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'moduleScope',
    'name',
    'value',
];

    /**
     * Returns the moduleId associated with the variable, only in case of local variable
     */
    public string $moduleId;
    /**
     * Returns true for local variables else returns false
     */
    public bool $moduleScope;
    /**
     * Name of the email variable
     */
    public string $name;
    /**
     * Value of the email variable
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'moduleId' => is_string($value) ? $this->moduleId = $value : parent::assignMember($name, $value),
            'moduleScope' => is_bool($value) ? $this->moduleScope = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
