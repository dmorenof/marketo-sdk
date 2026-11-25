<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ListOperationOutputData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    /**
     * Unique integer id of a lead record
     * Format: int64
     */
    public int $id;
    /**
     * List of reasons why an operation did not succeed. Reasons are only present in API responses and should not be submitted
     */
    public \MarketoSDK\Collections\ChangeLeadProgramStatusOutputData\ReasonsCollection $reasons;
    /**
     * Status of the operation performed on the record
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'reasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reasons = new \MarketoSDK\Collections\ChangeLeadProgramStatusOutputData\ReasonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Reason::class)) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
