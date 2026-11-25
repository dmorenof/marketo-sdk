<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class CampaignUsedByAsset extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'name',
];

    protected const array VALIDATION = [
    'accessZoneId' => [
        'format' => 'int32',
    ],
    'programId' => [
        'format' => 'int32',
    ],
];

    /**
     * Id of the workspace containing the asset
     * Format: int32
     */
    public int $accessZoneId {
        set {
            $this->assigning('accessZoneId', $value);
            $this->accessZoneId = $value;
        }
    }
    /**
     * Type of the asset
     */
    public string $compType;
    /**
     * Id of the asset
     * Format: int64
     */
    public int $id;
    /**
     * Name of the asset
     */
    public string $name;
    /**
     * Id of the program containing the asset
     * Format: int32
     */
    public int $programId {
        set {
            $this->assigning('programId', $value);
            $this->programId = $value;
        }
    }
    /**
     * Status of the asset
     */
    public string $status;
    /**
     * Subtype of the asset
     */
    public string $subType;
    /**
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accessZoneId' => is_int($value) ? $this->accessZoneId = $value : parent::assignMember($name, $value),
            'compType' => is_string($value) ? $this->compType = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'programId' => is_int($value) ? $this->programId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'subType' => is_string($value) ? $this->subType = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
