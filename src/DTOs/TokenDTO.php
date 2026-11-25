<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class TokenDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $computedUrl;
    public string $name;
    public string $type;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'computedUrl' => is_string($value) ? $this->computedUrl = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
