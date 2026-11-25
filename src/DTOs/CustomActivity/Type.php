<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\CustomActivity;

final class Type extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * API Name of the type. The API name must be unique and alphanumeric, containing at least one letter. It is highly recommended to prepend a unique namespace of up to sixteen characters to the API name. Required on creation
     */
    public string $apiName;
    /**
     * List of attributes for the activity type. May only be added or update through Create or Update Custom Activity Type Attributes
     */
    public \MarketoSDK\Collections\CustomActivity\Type\AttributesCollection $attributes;
    /**
     * Datetime when the activity type was created
     */
    public string $createdAt;
    /**
     * Description of the activity type
     */
    public string $description;
    /**
     * Human-readable name for the associated filter of the activity type. Required on creation
     */
    public string $filterName;
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Human-readable display name of the type. Required on creation
     */
    public string $name;
    /**
     * Primary Attribute of the activity type. Required on creation
     */
    public \MarketoSDK\DTOs\CustomActivity\TypeAttribute $primaryAttribute;
    /**
     * State of the activity type
     */
    public \MarketoSDK\Enums\CustomActivity\Type\StatusEnum $status;
    /**
     * Human-readable name for the associated trigger of the activity type. Required on creation
     */
    public string $triggerName;
    /**
     * Datetime when the activity type was most recently updated
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'attributes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attributes = new \MarketoSDK\Collections\CustomActivity\Type\AttributesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\CustomActivity\TypeAttribute::class)) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'filterName' => is_string($value) ? $this->filterName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'primaryAttribute' => $value instanceof \stdClass ? $this->primaryAttribute = new \MarketoSDK\DTOs\CustomActivity\TypeAttribute($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\CustomActivity\Type\StatusEnum::from($value) : parent::assignMember($name, $value),
            'triggerName' => is_string($value) ? $this->triggerName = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
