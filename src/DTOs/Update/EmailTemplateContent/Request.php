<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailTemplateContent;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Content for the email template. Multipart file.
     */
    public string $content;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
