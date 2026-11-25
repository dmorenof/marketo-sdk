<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SegmentsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'segmentationId',
];

    protected const array VALIDATION = [
    'segmentationId' => [
        'format' => 'int32',
    ],
];

    /**
     * Datetime the asset was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the asset
     */
    public string $description;
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
     * Id of the Segmentation
     * Format: int32
     */
    public int $segmentationId {
        set {
            $this->assigning('segmentationId', $value);
            $this->segmentationId = $value;
        }
    }
    /**
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Url of the asset in the Marketo UI
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'segmentationId' => is_int($value) ? $this->segmentationId = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
