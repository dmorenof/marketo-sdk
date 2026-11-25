<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\StaticList;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'folder',
        'name',
    ];

    /**
     * Description of the static list
     */
    public string $description;
    /**
     * Folder object describing the parent folder
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Name of the static list
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
