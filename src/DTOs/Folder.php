<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * JSON representation of a folder
 */
final class Folder extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'type',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Id of the folder
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Type of folder
     */
    public \MarketoSDK\Enums\Folder\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Folder\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
