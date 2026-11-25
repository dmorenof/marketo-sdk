<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * DataDTO
 */
final class DataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\HtmlDataDTO $html;
    public \MarketoSDK\DTOs\TextDataDTO $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'html' => $value instanceof \stdClass ? $this->html = new \MarketoSDK\DTOs\HtmlDataDTO($value) : parent::assignMember($name, $value),
            'text' => $value instanceof \stdClass ? $this->text = new \MarketoSDK\DTOs\TextDataDTO($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
