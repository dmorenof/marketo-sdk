<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Lead record. Always contains id, but may have any number of other fields, depending on the fields available in the target instance.
 */
final class Lead extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique integer id of a lead record
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Membership data for the parent program. Only returned via Get Leads By Program Id
     */
    public \MarketoSDK\DTOs\ProgramMembership $membership;
    /**
     * Reason object describing why an operation did not succeed for a record
     */
    public \MarketoSDK\DTOs\Reason $reason;
    /**
     * Status of the operation performed on the record
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'membership' => $value instanceof \stdClass ? $this->membership = new \MarketoSDK\DTOs\ProgramMembership($value) : parent::assignMember($name, $value),
            'reason' => $value instanceof \stdClass ? $this->reason = new \MarketoSDK\DTOs\Reason($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
