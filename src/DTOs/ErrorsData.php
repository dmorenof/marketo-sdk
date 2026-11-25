<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ErrorsData extends \Dmorenof\SdkRuntime\DTO
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
     * Counts for individual error codes
     */
    public \MarketoSDK\Collections\ErrorsData\ErrorsCollection $errors;
    /**
     * Total number of errors in the time period
     * Format: int32
     */
    public int $total {
        set {
            $this->assigning('total', $value);
            $this->total = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\ErrorsData\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ErrorCount::class)) : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
