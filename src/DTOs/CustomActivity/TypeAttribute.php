<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\CustomActivity;

final class TypeAttribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apiName',
        'name',
    ];

    /**
     * API Name of the attribute
     */
    public string $apiName;
    /**
     * Data type of the attribute
     */
    public \MarketoSDK\Enums\CustomActivity\TypeAttribute\DataTypeEnum $dataType;
    /**
     * Description of the attribute
     */
    public string $description;
    /**
     * Whether the attribute is the primary attribute of the activity type. There may only be one primary attribute at a time
     * Example: false
     */
    public bool $isPrimary;
    /**
     * Human-readable display name of the attribute
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'dataType' => is_string($value) ? $this->dataType = \MarketoSDK\Enums\CustomActivity\TypeAttribute\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'isPrimary' => is_bool($value) ? $this->isPrimary = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
