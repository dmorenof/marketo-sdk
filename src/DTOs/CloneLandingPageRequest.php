<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class CloneLandingPageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'folder',
    'name',
];

    protected const array VALIDATION = [
    'template' => [
        'format' => 'int32',
    ],
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
     * Name of the landing page
     */
    public string $name;
    /**
     * Id of the template used
     * Format: int32
     */
    public int $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'template' => is_int($value) ? $this->template = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
