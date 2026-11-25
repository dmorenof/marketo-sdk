<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

/**
 * ResponseOfRole
 */
final class Role extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'description',
    'id',
    'isHidden',
    'isOnlyAllZones',
    'name',
    'type',
    'updatedAt',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Role creation time
     */
    public string $createdAt;
    /**
     * Role description
     */
    public string $description;
    /**
     * Array of errors that occurred if the request was unsuccessful
     */
    public \MarketoSDK\Collections\CustomActivity\ErrorsCollection $errors;
    /**
     * Role id
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Whether role is hidden
     */
    public bool $isHidden;
    /**
     * Whether role is all zones
     */
    public bool $isOnlyAllZones;
    /**
     * Role name
     */
    public string $name;
    /**
     * Role type
     */
    public string $type;
    /**
     * Role update time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\CustomActivity\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isHidden' => is_bool($value) ? $this->isHidden = $value : parent::assignMember($name, $value),
            'isOnlyAllZones' => is_bool($value) ? $this->isOnlyAllZones = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
