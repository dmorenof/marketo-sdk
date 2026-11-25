<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

/**
 * ResponseOfWorkspace
 */
final class Workspace extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'currencyInfo',
    'description',
    'globalViz',
    'id',
    'name',
    'status',
];

    protected const array VALIDATION = [
    'globalViz' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Workspace creation time
     */
    public string $createdAt;
    /**
     * Workspace currency information
     */
    public string $currencyInfo;
    /**
     * Workspace description
     */
    public string $description;
    /**
     * Array of errors that occurred if the request was unsuccessful
     */
    public \MarketoSDK\Collections\CustomActivity\ErrorsCollection $errors;
    /**
     * Workspace global visualization
     * Format: int32
     */
    public int $globalViz {
        set {
            $this->assigning('globalViz', $value);
            $this->globalViz = $value;
        }
    }
    /**
     * Workspace id
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Workspace name
     */
    public string $name;
    /**
     * Workspace status
     */
    public string $status;
    /**
     * Workspace updated time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'currencyInfo' => is_string($value) ? $this->currencyInfo = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\CustomActivity\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            'globalViz' => is_int($value) ? $this->globalViz = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
