<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\Variable;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Module that variable is associated with. Required for updating module variables. Not needed for global variables.
     */
    public string $moduleId;
    /**
     * Value to update variable with
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'moduleId' => is_string($value) ? $this->moduleId = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
