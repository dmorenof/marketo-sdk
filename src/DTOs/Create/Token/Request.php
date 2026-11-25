<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\Token;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'folderType',
        'name',
        'type',
        'value',
    ];

    /**
     * Type of folder. 'Folder' or 'Program'
     */
    public \MarketoSDK\Enums\Create\Token\Request\FolderTypeEnum $folderType;
    /**
     * Name of the token. Max length is 50 characters)
     */
    public string $name;
    /**
     * Type of the token
     */
    public \MarketoSDK\Enums\Create\Token\Request\TypeEnum $type;
    /**
     * Value of the token
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'folderType' => is_string($value) ? $this->folderType = \MarketoSDK\Enums\Create\Token\Request\FolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Create\Token\Request\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
