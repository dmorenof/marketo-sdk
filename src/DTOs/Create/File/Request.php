<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\File;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'file',
    'folder',
    'name',
];

    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Multipart file. Content of the file.
     */
    public string $file;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Whether the calls hould fail if there is already an existing file with the same name
     */
    public bool $insertOnly;
    /**
     * Name of the File
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'file' => is_string($value) ? $this->file = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'insertOnly' => is_bool($value) ? $this->insertOnly = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
