<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class CostRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cost',
        'startDate',
    ];

    protected const array VALIDATION = [
        'cost' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Amount of the cost
     * Format: int32
     */
    public int $cost {
        set {
            $this->assigning('cost', $value);
            $this->cost = $value;
        }
    }
    /**
     * Notes on the cost
     */
    public string $note;
    /**
     * Start date of the period cost
     * Format: date-time
     */
    public string $startDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cost' => is_int($value) ? $this->cost = $value : parent::assignMember($name, $value),
            'note' => is_string($value) ? $this->note = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
