<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class FolderResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createdAt',
        'folderId',
        'folderType',
        'id',
        'isArchive',
        'name',
        'parent_',
        'path',
        'updatedAt',
        'url',
    ];

    protected const array PROPERTY_MAP = [
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'parent_' => 'parent',
    ];

    protected const array VALIDATION = [
        'accessZoneId' => [
            'format' => 'int32',
        ],
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Format: int32
     */
    public int $accessZoneId {
        set {
            $this->assigning('accessZoneId', $value);
            $this->accessZoneId = $value;
        }
    }
    /**
     * Datetime the folder was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the folder
     */
    public string $description;
    /**
     * Id of the folder
     */
    public \MarketoSDK\DTOs\Folder $folderId;
    /**
     * Type of folder
     */
    public \MarketoSDK\Enums\FolderResponse\FolderTypeEnum $folderType;
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
     * Archival status of the folder
     */
    public bool $isArchive;
    /**
     * Whether the folder is system-managed
     */
    public bool $isSystem;
    /**
     * Name of the folder. Not applicable for Programs
     */
    public string $name;
    /**
     * Parent folder reference
     */
    public \MarketoSDK\DTOs\Folder $parent_;
    /**
     * Path of the folder
     */
    public string $path;
    /**
     * Datetime the folder was last updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Url of the folder
     */
    public string $url;
    /**
     * Name of the workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accessZoneId' => is_int($value) ? $this->accessZoneId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folderId' => $value instanceof \stdClass ? $this->folderId = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'folderType' => is_string($value) ? $this->folderType = \MarketoSDK\Enums\FolderResponse\FolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isArchive' => is_bool($value) ? $this->isArchive = $value : parent::assignMember($name, $value),
            'isSystem' => is_bool($value) ? $this->isSystem = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent' => $value instanceof \stdClass ? $this->parent_ = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'path' => is_string($value) ? $this->path = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
