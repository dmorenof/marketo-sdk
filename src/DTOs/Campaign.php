<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Record of a Marketo Smart Campaign
 */
final class Campaign extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createdAt',
        'id',
        'name',
        'type',
        'updatedAt',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
        'programId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Whether the campaign is active. Only applicable to trigger campaigns
     * Example: false
     */
    public bool $active;
    /**
     * Datetime when the campaign was created
     */
    public string $createdAt;
    /**
     * Description of the Smart Campaign
     */
    public string $description;
    /**
     * Unique integer id of the Smart Campaign
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the Smart Campaign
     */
    public string $name;
    /**
     * Id of the parent program if applicable
     * Format: int32
     */
    public int $programId {
        set {
            $this->assigning('programId', $value);
            $this->programId = $value;
        }
    }
    /**
     * Name of the parent program if applicable
     */
    public string $programName;
    /**
     * Type of the Smart Campaign
     */
    public \MarketoSDK\Enums\Campaign\TypeEnum $type;
    /**
     * Datetime when the campaign was most recently updated
     */
    public string $updatedAt;
    /**
     * Name of the parent workspace if applicable
     */
    public string $workspaceName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'programId' => is_int($value) ? $this->programId = $value : parent::assignMember($name, $value),
            'programName' => is_string($value) ? $this->programName = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Campaign\TypeEnum::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'workspaceName' => is_string($value) ? $this->workspaceName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
