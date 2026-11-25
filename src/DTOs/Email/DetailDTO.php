<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailDetailDTO
 */
final class DetailDTO extends \MarketoSDK\DTOs\Email\ContentDTO
{
    public const array REQUIRED_FIELDS = [];

    public \MarketoSDK\DTOs\DataDTO $data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \MarketoSDK\DTOs\DataDTO($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
