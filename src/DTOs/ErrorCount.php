<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ErrorCount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'count',
    'errorCode',
];

    protected const array VALIDATION = [
    'count' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of occurences of the error
     * Format: int32
     */
    public int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    /**
     * Integer error code of the error
     */
    public string $errorCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'errorCode' => is_string($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
