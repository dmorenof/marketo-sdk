<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
        'message',
    ];

    /**
     * Error code of the error. See full list of error codes <a href="https://developers.marketo.com/rest-api/error-codes/">here</a>
     */
    public string $code;
    /**
     * Message describing the cause of the error
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
