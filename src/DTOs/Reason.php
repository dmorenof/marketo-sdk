<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class Reason extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
    'message',
];

    /**
     * Integer code of the reason
     */
    public string $code;
    /**
     * Message describing the reason for the status of the operation
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
