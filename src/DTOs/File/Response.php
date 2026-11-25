<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\File;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'folder',
    'id',
    'mimeType',
    'name',
    'size',
    'updatedAt',
    'url',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
    'size' => [
        'format' => 'int32',
    ],
];

    /**
     * Datetime when the file was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the file
     */
    public string $description;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\File\Folder $folder;
    /**
     * Id of the file
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * MIME type of the file
     */
    public string $mimeType;
    /**
     * Name of the file
     */
    public string $name;
    /**
     * Size of the file in bytes
     * Format: int32
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /**
     * Datetime when the file was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Publically accessible URL of the file
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\File\Folder($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'mimeType' => is_string($value) ? $this->mimeType = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
