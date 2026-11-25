<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailFullContent;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
    ];

    /**
     * Multipart file. File containing HTML document to update with. File cannot include JavaScript or script tags.
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
