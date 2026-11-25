<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

/**
 * Lead field record
 */
final class Field extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dataType',
        'description',
        'displayName',
        'isApiCreated',
        'isCustom',
        'isHidden',
        'isHtmlEncodingInEmail',
        'isSensitive',
        'name',
    ];

    protected const array VALIDATION = [
        'length' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Datatype of the field
     */
    public string $dataType;
    /**
     * Description of the field
     */
    public string $description;
    /**
     * UI display-name of the field
     */
    public string $displayName;
    /**
     * If set to true, field was created using REST API
     * Example: false
     */
    public bool $isApiCreated;
    /**
     * If set to true, field is custom
     * Example: false
     */
    public bool $isCustom;
    /**
     * If set to true, the field is hidden
     * Example: false
     */
    public bool $isHidden;
    /**
     * If set to true, field is encoded as HTML in email
     * Example: false
     */
    public bool $isHtmlEncodingInEmail;
    /**
     * If set to true, field is marked as sensitive
     * Example: false
     */
    public bool $isSensitive;
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
     * API name of the field
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'isApiCreated' => is_bool($value) ? $this->isApiCreated = $value : parent::assignMember($name, $value),
            'isCustom' => is_bool($value) ? $this->isCustom = $value : parent::assignMember($name, $value),
            'isHidden' => is_bool($value) ? $this->isHidden = $value : parent::assignMember($name, $value),
            'isHtmlEncodingInEmail' => is_bool($value) ? $this->isHtmlEncodingInEmail = $value : parent::assignMember($name, $value),
            'isSensitive' => is_bool($value) ? $this->isSensitive = $value : parent::assignMember($name, $value),
            'length' => is_int($value) ? $this->length = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
