<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ListDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'listId',
    'updatedAt',
];

    protected const array VALIDATION = [
    'listId' => [
        'format' => 'int32',
    ],
];

    /**
     * Datetime when the static list was created
     */
    public string $createdAt;
    /**
     * Unique integer id of the static list
     * Format: int32
     */
    public int $listId {
        set {
            $this->assigning('listId', $value);
            $this->listId = $value;
        }
    }
    /**
     * Datetime when the static list was most recently updated
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'listId' => is_int($value) ? $this->listId = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
