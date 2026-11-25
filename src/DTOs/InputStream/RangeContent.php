<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\InputStream;

final class RangeContent extends \Dmorenof\SdkRuntime\DTO
{
    public string $contentType;
    public \MarketoSDK\DTOs\File\Range $fileRange;
    public \MarketoSDK\DTOs\InputStream $inputStream;
    /**
     * Format: int64
     */
    public int $length;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'fileRange' => $value instanceof \stdClass ? $this->fileRange = new \MarketoSDK\DTOs\File\Range($value) : parent::assignMember($name, $value),
            'length' => is_int($value) ? $this->length = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
