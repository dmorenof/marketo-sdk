<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\LandingPage\DynamicContent;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
        'segmentation' => [
            'format' => 'int32',
        ],
    ];

    /**
     * List of variations in the section
     */
    public \MarketoSDK\Collections\LandingPage\DynamicContent\Response\ContentCollection $content;
    /**
     * Datetime when the section was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Id of the dnamic content section
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Segmentation to which the section is linked
     * Format: int32
     */
    public int $segmentation {
        set {
            $this->assigning('segmentation', $value);
            $this->segmentation = $value;
        }
    }
    /**
     * Datetime when the section was last updated
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->content = new \MarketoSDK\Collections\LandingPage\DynamicContent\Response\ContentCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\SegmentContent::class)) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'segmentation' => is_int($value) ? $this->segmentation = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
