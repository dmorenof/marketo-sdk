<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class Warning extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
    'message',
];

    protected const array VALIDATION = [
    'code' => [
        'format' => 'int32',
    ],
];

    /**
     * Integer code of the warning
     * Format: int32
     */
    public int $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    /**
     * Message describing the warning
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_int($value) ? $this->code = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
