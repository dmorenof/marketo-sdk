<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SalesPerson extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'seq' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Unique integer id of the salesperson record
     * Format: int64
     */
    public int $id;
    /**
     * List of reasons why an operation did not succeed. Reasons are only present in API responses and should not be submitted
     */
    public \MarketoSDK\Collections\ChangeLeadProgramStatusOutputData\ReasonsCollection $reasons;
    /**
     * Integer indicating the sequence of the record in response. This value is correlated to the order of the records included in the request input. Seq should only be part of responses and should not be submitted.
     * Format: int32
     */
    public int $seq {
        set {
            $this->assigning('seq', $value);
            $this->seq = $value;
        }
    }
    /**
     * Status of the operation performed on the record
     */
    public \MarketoSDK\Enums\SalesPerson\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'reasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reasons = new \MarketoSDK\Collections\ChangeLeadProgramStatusOutputData\ReasonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Reason::class)) : parent::assignMember($name, $value),
            'seq' => is_int($value) ? $this->seq = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\SalesPerson\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
