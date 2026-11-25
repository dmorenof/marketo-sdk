<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ProgramMember;

final class Attribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fields',
    ];

    /**
     * Description of searchable fields
     */
    public \MarketoSDK\Collections\Lead\Attribute2\FieldsCollection $fields;
    /**
     * "API Program Member"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \MarketoSDK\Collections\Lead\Attribute2\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Lead\Attribute2Fields::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
