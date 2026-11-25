<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Form;

final class KnownVisitorDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $template;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'template' => is_string($value) ? $this->template = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
