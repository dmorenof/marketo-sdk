<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class CloneEmailRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'folder',
        'name',
    ];

    /**
     * Description of the asset
     */
    public string $description;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Name of the new email asset
     */
    public string $name;
    /**
     * Whether the email is operational. Operational emails bypass unsubscribe status. Defaults to false
     */
    public bool $operational;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operational' => is_bool($value) ? $this->operational = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
