<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\SnippetDynamicContent;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Type of dynamic content section
     */
    public \MarketoSDK\Enums\Update\SnippetDynamicContent\Request\TypeEnum $type;
    /**
     * Value of the dynamic content section
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Update\SnippetDynamicContent\Request\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
