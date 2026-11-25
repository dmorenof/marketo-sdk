<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailTemplateMetaData;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * Name of the Email Template
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
