<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

/**
 * Form fields. Always contains email, but may have any number of other fields depending on the fields available in the form.
 */
final class FormFields extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
];

    /**
     * Email address used as primary key during lead upsert
     */
    public string $email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
