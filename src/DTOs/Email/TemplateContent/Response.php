<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email\TemplateContent;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'id',
    'status',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * HTML content of the template
     */
    public string $content;
    /**
     * Unique integer id of the email template
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Status filter for draft or approved versions
     */
    public \MarketoSDK\Enums\Email\TemplateContent\Response\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\Email\TemplateContent\Response\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
