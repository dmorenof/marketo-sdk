<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SmartListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'description',
    'folder',
    'id',
    'name',
    'updatedAt',
    'workspace',
];

    /**
     * Datetime the smart list was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the smart list
     */
    public string $description;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Id of the smart list
     * Format: int64
     */
    public int $id;
    /**
     * Name of the smart list
     */
    public string $name;
    /**
     * Datetime the smart list was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Url of the smart list in the Marketo UI
     */
    public string $url;
    /**
     * Name of the workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
