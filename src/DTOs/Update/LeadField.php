<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update;

/**
 * Lead field record for update
 */
final class LeadField extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the field
     */
    public string $description;
    /**
     * UI display-name of the field
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'isHidden' => is_bool($value) ? $this->isHidden = $value : parent::assignMember($name, $value),
            'isHtmlEncodingInEmail' => is_bool($value) ? $this->isHtmlEncodingInEmail = $value : parent::assignMember($name, $value),
            'isSensitive' => is_bool($value) ? $this->isSensitive = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
