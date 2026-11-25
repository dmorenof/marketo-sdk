<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Add;

final class CustomObjectTypeField extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dataType',
        'displayName',
        'name',
    ];

    /**
     * Datatype of the custom object field
     */
    public string $dataType;
    /**
     * Description of the custom object field
     */
    public string $description;
    /**
     * UI display-name of the custom object field
     */
    public string $displayName;
    /**
     * Set to true to enable field as unique identifier for deduplicating records. Default is false
     */
    public bool $isDedupeField;
    /**
     * API Name of custom object field
     */
    public string $name;
    /**
     * Define custom object link field
     */
    public \MarketoSDK\DTOs\CustomObjectTypeFieldRelatedTo $relatedTo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'isDedupeField' => is_bool($value) ? $this->isDedupeField = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'relatedTo' => $value instanceof \stdClass ? $this->relatedTo = new \MarketoSDK\DTOs\CustomObjectTypeFieldRelatedTo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
