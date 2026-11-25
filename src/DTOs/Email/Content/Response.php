<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email\Content;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'contentType',
    'htmlId',
    'value',
];

    protected const array VALIDATION = [
    'index' => [
        'format' => 'int32',
    ],
];

    /**
     * Type of content to set for the section.
     */
    public string $contentType;
    /**
     * HTML id of the content section
     */
    public string $htmlId;
    /**
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
    public bool $isLocked;
    public string $parentHtmlId;
    /**
     * Contents of the section
     */
    public \MarketoSDK\DTOs\Email\Content\Response\ValueDTO $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'htmlId' => is_string($value) ? $this->htmlId = $value : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'isLocked' => is_bool($value) ? $this->isLocked = $value : parent::assignMember($name, $value),
            'parentHtmlId' => is_string($value) ? $this->parentHtmlId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
