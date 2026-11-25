<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ObjectField extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'length' => [
        'format' => 'int32',
    ],
];

    /**
     * Whether the field is managed by CRM (native sync)
     * Example: false
     */
    public bool $crmManaged;
    /**
     * Datatype of the field
     */
    public string $dataType;
    /**
     * UI display-name of the field
     */
    public string $displayName;
    /**
     * Max length of the field. Only applicable to text, string, and text area.
     * Format: int32
     */
    public int $length {
        set {
            $this->assigning('length', $value);
            $this->length = $value;
        }
    }
    /**
     * Name of the field
     */
    public string $name;
    /**
     * Whether the field is updateable
     * Example: false
     */
    public bool $updateable;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'crmManaged' => is_bool($value) ? $this->crmManaged = $value : parent::assignMember($name, $value),
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'length' => is_int($value) ? $this->length = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updateable' => is_bool($value) ? $this->updateable = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
