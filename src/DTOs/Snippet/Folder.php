<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Snippet;

/**
 * JSON representation of a folder
 */
final class Folder extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'folderName',
    'type',
    'value',
];

    protected const array VALIDATION = [
    'value' => [
        'format' => 'int32',
    ],
];

    /**
     * Name of folder
     */
    public string $folderName;
    /**
     * Type of folder
     */
    public \MarketoSDK\Enums\Snippet\Folder\TypeEnum $type;
    /**
     * Id of the folder
     * Format: int32
     */
    public int $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'folderName' => is_string($value) ? $this->folderName = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Snippet\Folder\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
