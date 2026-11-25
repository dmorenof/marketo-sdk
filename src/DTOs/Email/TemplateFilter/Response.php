<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email\TemplateFilter;

/**
 * EmailTemplateFilterResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $requestId;
    public \MarketoSDK\DTOs\Email\TemplateFilterResult $result;
    public bool $success;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
