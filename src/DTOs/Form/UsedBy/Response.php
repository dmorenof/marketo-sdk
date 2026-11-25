<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Form\UsedBy;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'name',
    'status',
    'type',
    'updatedAt',
];

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
     * Status filter for draft or approved versions
     */
    public \MarketoSDK\Enums\Form\UsedBy\Response\StatusEnum $status;
    /**
     * Type of asset
     */
    public string $type;
    /**
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\Form\UsedBy\Response\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
