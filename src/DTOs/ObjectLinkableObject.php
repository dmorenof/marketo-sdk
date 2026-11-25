<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ObjectLinkableObject extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'displayName',
    'fields',
    'name',
];

    /**
     * Link object UI display-name
     */
    public string $displayName;
    /**
     * List of fields available on the link object
     */
    public \MarketoSDK\Collections\ObjectLinkableObject\FieldsCollection $fields;
    /**
     * Link object API name
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \MarketoSDK\Collections\ObjectLinkableObject\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ObjectLinkableObjectField::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
