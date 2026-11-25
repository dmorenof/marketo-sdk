<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailTemplateDetailDTO
 */
final class TemplateDetailDTO extends \MarketoSDK\DTOs\Email\TemplateContentDTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'version' => [
            'format' => 'int32',
        ],
    ];

    public \MarketoSDK\DTOs\DataDTO $data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \MarketoSDK\DTOs\DataDTO($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
