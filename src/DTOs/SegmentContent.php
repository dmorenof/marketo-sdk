<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SegmentContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'segmentId',
    'segmentName',
    'type',
];

    protected const array VALIDATION = [
    'segmentId' => [
        'format' => 'int32',
    ],
];

    /**
     * Type of content section
     */
    public \MarketoSDK\DTOs\SegmentContent\ContentDTO $content;
    public string $followupType;
    public string $followupValue;
    /**
     * Segmentation to which the section is linked
     * Format: int32
     */
    public int $segmentId {
        set {
            $this->assigning('segmentId', $value);
            $this->segmentId = $value;
        }
    }
    /**
     * Name of the segment to display content section for
     */
    public string $segmentName;
    /**
     * Type of content section
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'followupType' => is_string($value) ? $this->followupType = $value : parent::assignMember($name, $value),
            'followupValue' => is_string($value) ? $this->followupValue = $value : parent::assignMember($name, $value),
            'segmentId' => is_int($value) ? $this->segmentId = $value : parent::assignMember($name, $value),
            'segmentName' => is_string($value) ? $this->segmentName = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
