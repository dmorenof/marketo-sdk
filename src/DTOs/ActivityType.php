<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ActivityType extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'attributes',
    'id',
    'name',
    'primaryAttribute',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public string $apiName;
    /**
     * List of secondary attributes of the type
     */
    public \MarketoSDK\Collections\ActivityType\AttributesCollection $attributes;
    /**
     * Description of the activity type
     */
    public string $description;
    /**
     * Id of the activity type
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the activity type
     */
    public string $name;
    /**
     * Primary attribute of the type
     */
    public \MarketoSDK\DTOs\ActivityTypeAttribute $primaryAttribute;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'attributes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attributes = new \MarketoSDK\Collections\ActivityType\AttributesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ActivityTypeAttribute::class)) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'primaryAttribute' => $value instanceof \stdClass ? $this->primaryAttribute = new \MarketoSDK\DTOs\ActivityTypeAttribute($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
