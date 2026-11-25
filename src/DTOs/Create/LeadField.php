<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create;

/**
 * Lead field record for create
 */
final class LeadField extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dataType',
        'displayName',
        'name',
    ];

    /**
     * Datatype of the field
     */
    public \MarketoSDK\Enums\Create\LeadField\DataTypeEnum $dataType;
    /**
     * Description of the field. Default is no description
     */
    public string $description;
    /**
     * UI display-name of the field. Must be unique, cannot contain special characters
     */
    public string $displayName;
    /**
     * If set to true, the field is hidden. Default is false
     * Example: false
     */
    public bool $isHidden;
    /**
     * If set to true, field is encoded as HTML in email. Default is true
     * Example: false
     */
    public bool $isHtmlEncodingInEmail;
    /**
     * If set to true, field is marked as sensitive. Default is false
     * Example: false
     */
    public bool $isSensitive;
    /**
     * API name of the field. Must be unique, start with a letter, and only contain letters, numbers, or underscore
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = \MarketoSDK\Enums\Create\LeadField\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'isHidden' => is_bool($value) ? $this->isHidden = $value : parent::assignMember($name, $value),
            'isHtmlEncodingInEmail' => is_bool($value) ? $this->isHtmlEncodingInEmail = $value : parent::assignMember($name, $value),
            'isSensitive' => is_bool($value) ? $this->isSensitive = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
