<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * TextDataDTO
 */
final class TextDataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $body;
    public bool $syncFromHtml;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'syncFromHtml' => is_bool($value) ? $this->syncFromHtml = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
