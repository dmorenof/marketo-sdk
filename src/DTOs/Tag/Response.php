<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Tag;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applicableProgramTypes',
        'required',
        'tagType',
    ];

    /**
     * The list of acceptable values for the tag type
     */
    public string $allowableValues;
    /**
     * Types of programs to which the tag can apply
     */
    public string $applicableProgramTypes;
    /**
     * Whether the tag is required for its applicable program types
     */
    public bool $required;
    /**
     * Name of the tag
     */
    public string $tagType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowableValues' => is_string($value) ? $this->allowableValues = $value : parent::assignMember($name, $value),
            'applicableProgramTypes' => is_string($value) ? $this->applicableProgramTypes = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'tagType' => is_string($value) ? $this->tagType = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
