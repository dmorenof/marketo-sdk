<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

final class Attribute2Fields extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'crmManaged',
        'dataType',
        'displayName',
        'name',
        'updateable',
    ];

    /**
     * Is field managed by CRM
     */
    public bool $crmManaged;
    /**
     * Data type of field
     */
    public string $dataType;
    /**
     * Display name of field (friendly name)
     */
    public string $displayName;
    /**
     * Length of field
     */
    public int $length;
    /**
     * REST API name of field
     */
    public string $name;
    /**
     * Is field updateable
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
