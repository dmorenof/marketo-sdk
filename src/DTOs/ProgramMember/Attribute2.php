<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ProgramMember;

final class Attribute2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createdAt',
        'dedupeFields',
        'description',
        'fields',
        'name',
        'searchableFields',
        'updatedAt',
    ];

    /**
     * Datetime when created
     */
    public string $createdAt;
    /**
     * List of dedupe fields
     */
    public \MarketoSDK\Collections\StringCollection $dedupeFields;
    /**
     * "API Program Member Map"
     */
    public string $description;
    /**
     * Description of searchable fields
     */
    public \MarketoSDK\Collections\ProgramMember\Attribute2\FieldsCollection $fields;
    /**
     * "API Program Member"
     */
    public string $name;
    /**
     * List of searchable fields
     */
    public \MarketoSDK\Collections\Lead\Attribute2\SearchableFieldsCollection $searchableFields;
    /**
     * Datetime updated
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'dedupeFields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->dedupeFields = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \MarketoSDK\Collections\ProgramMember\Attribute2\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Lead\Attribute2Fields2::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
