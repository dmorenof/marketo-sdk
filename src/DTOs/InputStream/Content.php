<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\InputStream;

final class Content extends \Dmorenof\SdkRuntime\DTO
{
    public string $contentType;
    public \MarketoSDK\DTOs\InputStream $inputStream;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
