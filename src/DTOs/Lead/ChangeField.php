<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

/**
 * Activity record containing information on a data value change
 */
final class ChangeField extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'name',
    'newValue',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique integer id of the change record
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the field which was changed
     */
    public string $name;
    /**
     * New value after the change
     */
    public string $newValue;
    /**
     * Old value before the change
     */
    public string $oldValue;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'newValue' => is_string($value) ? $this->newValue = $value : parent::assignMember($name, $value),
            'oldValue' => is_string($value) ? $this->oldValue = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
