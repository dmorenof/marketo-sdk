<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\Folder;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'parent_',
    ];

    protected const array PROPERTY_MAP = [
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'parent_' => 'parent',
    ];

    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Name of the Folder
     */
    public string $name;
    /**
     * Folder object describing the parent folder
     */
    public \MarketoSDK\DTOs\Folder $parent_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent' => $value instanceof \stdClass ? $this->parent_ = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
