<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Add\FormFieldSet;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'label',
];

    /**
     * Label of the fieldset
     */
    public string $label;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
