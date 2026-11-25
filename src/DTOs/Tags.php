<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class Tags extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tagType',
        'tagValue',
    ];

    /**
     * Name of the tag
     */
    public string $tagType;
    /**
     * Value of the tag
     */
    public string $tagValue;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tagType' => is_string($value) ? $this->tagType = $value : parent::assignMember($name, $value),
            'tagValue' => is_string($value) ? $this->tagValue = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
