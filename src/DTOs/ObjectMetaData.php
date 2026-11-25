<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ObjectMetaData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apiName',
        'createdAt',
        'dedupeFields',
        'description',
        'displayName',
        'fields',
        'idField',
        'pluralName',
        'relationships',
        'searchableFields',
        'updatedAt',
        'version',
    ];

    /**
     * Name of the object type
     */
    public string $apiName;
    /**
     * Datetime when the object type was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * List of dedupe fields. Arrays with multiple members are compound keys
     */
    public \MarketoSDK\Collections\StringCollection $dedupeFields;
    /**
     * Description of the object type
     */
    public string $description;
    /**
     * UI display-name of the object type
     */
    public string $displayName;
    /**
     * List of fields available on the object type
     */
    public \MarketoSDK\Collections\ObjectMetaData\FieldsCollection $fields;
    /**
     * Primary id key of the object type
     */
    public string $idField;
    /**
     * UI plural-name of the custom object type
     */
    public string $pluralName;
    /**
     * List of relationships which the object has
     */
    public \MarketoSDK\Collections\ObjectMetaData\RelationshipsCollection $relationships;
    /**
     * List of fields valid for use as a filter type in a query
     */
    public \MarketoSDK\Collections\Lead\Attribute2\SearchableFieldsCollection $searchableFields;
    /**
     * Approval state of object type
     */
    public \MarketoSDK\Enums\ObjectMetaData\StateEnum $state;
    /**
     * Datetime when the object type was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Version of object type that is returned in response
     */
    public \MarketoSDK\Enums\ObjectMetaData\VersionEnum $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'dedupeFields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->dedupeFields = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \MarketoSDK\Collections\ObjectMetaData\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ObjectField::class)) : parent::assignMember($name, $value),
            'idField' => is_string($value) ? $this->idField = $value : parent::assignMember($name, $value),
            'pluralName' => is_string($value) ? $this->pluralName = $value : parent::assignMember($name, $value),
            'relationships' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->relationships = new \MarketoSDK\Collections\ObjectMetaData\RelationshipsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ObjectRelation::class)) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \MarketoSDK\Enums\ObjectMetaData\StateEnum::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = \MarketoSDK\Enums\ObjectMetaData\VersionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
