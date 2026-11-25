<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

/**
 * Lead field update status
 */
final class FieldStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'status',
];

    /**
     * API name of the field
     */
    public string $name;
    /**
     * Status of the operation performed on the record
     */
    public \MarketoSDK\Enums\Lead\FieldStatus\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\Lead\FieldStatus\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
