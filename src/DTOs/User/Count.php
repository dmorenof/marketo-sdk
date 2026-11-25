<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\User;

final class Count extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count',
        'userId',
    ];

    protected const array VALIDATION = [
        'count' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Number of calls made in the time period
     * Format: int32
     */
    public int $count {
        set {
            $this->assigning('count', $value);
            $this->count = $value;
        }
    }
    /**
     * Id of the user
     */
    public string $userId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
