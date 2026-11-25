<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Delete\Token;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\Enums\Delete\Token\Request\FolderTypeEnum $folderType;
    public string $name;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'folderType' => is_string($value) ? $this->folderType = \MarketoSDK\Enums\Delete\Token\Request\FolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
