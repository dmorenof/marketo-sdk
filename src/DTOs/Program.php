<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class Program extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'acquiredBy',
    'id',
    'isExhausted',
    'membershipDate',
    'progressionStatus',
    'reachedSuccess',
    'updatedAt',
];

    /**
     * Whether the lead was acquired by the parent program
     * Example: false
     */
    public bool $acquiredBy;
    /**
     * Unique integer id of a program record
     * Format: int64
     */
    public int $id;
    /**
     * Whether the lead is currently exhausted in the stream, if applicable
     * Example: false
     */
    public bool $isExhausted;
    /**
     * Date the lead first became a member of the program
     */
    public string $membershipDate;
    /**
     * Cadence of the parent stream if applicable
     */
    public string $nurtureCadence;
    /**
     * Program status of the lead in the parent program
     */
    public string $progressionStatus;
    /**
     * Whether the lead is in a success-status in the parent program
     * Example: false
     */
    public bool $reachedSuccess;
    /**
     * Stream that the lead is a member of, if the parent program is an engagement program
     */
    public string $stream;
    /**
     * Datetime when the program was most recently updated
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acquiredBy' => is_bool($value) ? $this->acquiredBy = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isExhausted' => is_bool($value) ? $this->isExhausted = $value : parent::assignMember($name, $value),
            'membershipDate' => is_string($value) ? $this->membershipDate = $value : parent::assignMember($name, $value),
            'nurtureCadence' => is_string($value) ? $this->nurtureCadence = $value : parent::assignMember($name, $value),
            'progressionStatus' => is_string($value) ? $this->progressionStatus = $value : parent::assignMember($name, $value),
            'reachedSuccess' => is_bool($value) ? $this->reachedSuccess = $value : parent::assignMember($name, $value),
            'stream' => is_string($value) ? $this->stream = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
