<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ObjectLinkableObjectField extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'dataType',
    'displayName',
    'name',
];

    /**
     * Link field data type
     */
    public string $dataType;
    /**
     * Link field name
     */
    public string $displayName;
    /**
     * Link field API name
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
