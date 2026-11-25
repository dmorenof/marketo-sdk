<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\Folder;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Whether the folder is archived or not. Toggling this value will change the archival status of the folder
     */
    public bool $isArchive;
    /**
     * Name of the Folder
     */
    public string $name;
    /**
     * Type of folder. 'Folder' or 'Program'
     */
    public \MarketoSDK\Enums\Update\Folder\Request\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'isArchive' => is_bool($value) ? $this->isArchive = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Update\Folder\Request\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
