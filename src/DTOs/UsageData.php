<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class UsageData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'date',
    ];

    protected const array VALIDATION = [
        'total' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Date of the collected calls
     * Format: date-time
     */
    public string $date;
    /**
     * Total number of calls in the time period
     * Format: int32
     */
    public int $total {
        set {
            $this->assigning('total', $value);
            $this->total = $value;
        }
    }
    /**
     * Counts for individual users
     */
    public \MarketoSDK\Collections\UsageData\UsersCollection $users;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'users' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->users = new \MarketoSDK\Collections\UsageData\UsersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\User\Count::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
