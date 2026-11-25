<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * HtmlDataDTO
 */
final class HtmlDataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $body;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
