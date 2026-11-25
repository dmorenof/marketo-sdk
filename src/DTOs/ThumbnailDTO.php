<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * ThumbnailDTO
 */
final class ThumbnailDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Thumbnail image, typically a base64-encoded data URI.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
