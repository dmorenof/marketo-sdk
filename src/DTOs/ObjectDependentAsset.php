<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ObjectDependentAsset extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'assetId',
    'assetName',
    'assetType',
];

    protected const array VALIDATION = [
    'assetId' => [
        'format' => 'int32',
    ],
];

    /**
     * ID of asset
     * Format: int32
     */
    public int $assetId {
        set {
            $this->assigning('assetId', $value);
            $this->assetId = $value;
        }
    }
    /**
     * Name of asset
     */
    public string $assetName;
    /**
     * Type of asset
     */
    public string $assetType;
    /**
     * List of associated fields
     */
    public \MarketoSDK\Collections\StringCollection $usedFields;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'assetId' => is_int($value) ? $this->assetId = $value : parent::assignMember($name, $value),
            'assetName' => is_string($value) ? $this->assetName = $value : parent::assignMember($name, $value),
            'assetType' => is_string($value) ? $this->assetType = $value : parent::assignMember($name, $value),
            'usedFields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->usedFields = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
