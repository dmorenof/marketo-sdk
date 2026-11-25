<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class StaticList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'id',
    'name',
    'updatedAt',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Datetime when the list was created
     */
    public string $createdAt;
    /**
     * Description of the static list
     */
    public string $description;
    /**
     * Unique integer id of the static list
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the static list
     */
    public string $name;
    /**
     * Name of the program
     */
    public string $programName;
    /**
     * Datetime when the list was most recently updated
     */
    public string $updatedAt;
    /**
     * Name of the parent workspace, if applicable
     */
    public string $workspaceName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'programName' => is_string($value) ? $this->programName = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'workspaceName' => is_string($value) ? $this->workspaceName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
