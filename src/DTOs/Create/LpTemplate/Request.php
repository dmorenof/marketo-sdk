<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\LpTemplate;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'folder',
        'name',
    ];

    /**
     * Description of the landing page template
     */
    public string $description;
    /**
     * Whether to enable munchkin on the derived pages. Defaults to true
     */
    public bool $enableMunchkin;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Name of the landing page template
     */
    public string $name;
    /**
     * Type of template to create. Defaults to freeForm
     */
    public \MarketoSDK\Enums\Create\LpTemplate\Request\TemplateTypeEnum $templateType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'enableMunchkin' => is_bool($value) ? $this->enableMunchkin = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'templateType' => is_string($value) ? $this->templateType = \MarketoSDK\Enums\Create\LpTemplate\Request\TemplateTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
