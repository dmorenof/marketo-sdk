<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ActivityTypeAttribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dataType',
        'name',
    ];

    public string $apiName;
    /**
     * Datatype of the Attribute
     */
    public string $dataType;
    /**
     * Name of the attribute
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
