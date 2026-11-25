<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

final class CCFields extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiName',
    'attributeId',
    'displayName',
    'objectName',
];

    /**
     * API name
     */
    public string $apiName;
    /**
     * Attribute identifier
     */
    public string $attributeId;
    /**
     * Display name
     */
    public string $displayName;
    /**
     * Object name. 'lead' or 'company'
     */
    public string $objectName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'attributeId' => is_string($value) ? $this->attributeId = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'objectName' => is_string($value) ? $this->objectName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
