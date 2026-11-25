<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Program member record. Always contains lead id, but may have any number of other fields, depending on the fields available in the target instance.
 */
final class ProgramMember extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'acquiredBy',
        'leadId',
        'membershipDate',
        'programId',
        'reachedSuccess',
        'seq',
    ];

    protected const array VALIDATION = [
        'leadId' => [
            'format' => 'int32',
        ],
        'programId' => [
            'format' => 'int32',
        ],
        'seq' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Boolean indicating if program member was acquired by program
     * Example: false
     */
    public bool $acquiredBy;
    /**
     * Unique integer id of a lead record
     * Format: int32
     */
    public int $leadId {
        set {
            $this->assigning('leadId', $value);
            $this->leadId = $value;
        }
    }
    /**
     * Date the lead first became a member of the program
     */
    public string $membershipDate;
    /**
     * Unique integer id of a program
     * Format: int32
     */
    public int $programId {
        set {
            $this->assigning('programId', $value);
            $this->programId = $value;
        }
    }
    /**
     * Boolean indicating if program member has reached success criteria for program
     * Example: false
     */
    public bool $reachedSuccess;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acquiredBy' => is_bool($value) ? $this->acquiredBy = $value : parent::assignMember($name, $value),
            'leadId' => is_int($value) ? $this->leadId = $value : parent::assignMember($name, $value),
            'membershipDate' => is_string($value) ? $this->membershipDate = $value : parent::assignMember($name, $value),
            'programId' => is_int($value) ? $this->programId = $value : parent::assignMember($name, $value),
            'reachedSuccess' => is_bool($value) ? $this->reachedSuccess = $value : parent::assignMember($name, $value),
            'seq' => is_int($value) ? $this->seq = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
