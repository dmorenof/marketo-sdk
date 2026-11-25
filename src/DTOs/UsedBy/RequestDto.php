<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\UsedBy;

/**
 * UsedByRequestDto
 */
final class RequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'assetId',
    ];

    protected const array VALIDATION = [
        'pageIndex' => [
            'format' => 'int32',
        ],
        'pageSize' => [
            'format' => 'int32',
        ],
    ];

    public string $assetId;
    /**
     * Format: int32
     */
    public int $pageIndex {
        set {
            $this->assigning('pageIndex', $value);
            $this->pageIndex = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'assetId' => is_string($value) ? $this->assetId = $value : parent::assignMember($name, $value),
            'pageIndex' => is_int($value) ? $this->pageIndex = $value : parent::assignMember($name, $value),
            'pageSize' => is_int($value) ? $this->pageSize = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
