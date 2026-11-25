<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * JSON representation of 'from' redirect landing page rule
 */
final class RedirectFrom extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
    'value',
];

    /**
     * Type of redirect landing page
     */
    public \MarketoSDK\Enums\RedirectFrom\TypeEnum $type;
    /**
     * Value for redirect landing page. If type is 'path' this must not begin with forward slash
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\RedirectFrom\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
