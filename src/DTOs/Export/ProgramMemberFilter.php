<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Export;

final class ProgramMemberFilter extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'programId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Filter program membership records for people who have exhausted content
     */
    public bool $isExhausted;
    /**
     * Filter program membership records for a given nurture cadence
     */
    public \MarketoSDK\Enums\Export\ProgramMemberFilter\NurtureCadenceEnum $nurtureCadence;
    /**
     * Id of program to retrieve members from. Cannot be used in combination with "programIds" filter
     * Format: int32
     */
    public int $programId {
        set {
            $this->assigning('programId', $value);
            $this->programId = $value;
        }
    }
    /**
     * Array of program ids to retrieve members from. Cannot be used in combination with "programId" filter
     */
    public \MarketoSDK\Collections\Export\ActivityFilter\TypeIdsCollection $programIds;
    /**
     * Array of program member status names. Can be default and/or user-defined. Multiple status names are ORed together.
     */
    public \MarketoSDK\Collections\StringCollection $statusNames;
    /**
     * Date range to filter program members on
     */
    public \MarketoSDK\DTOs\DateRange $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'isExhausted' => is_bool($value) ? $this->isExhausted = $value : parent::assignMember($name, $value),
            'nurtureCadence' => is_string($value) ? $this->nurtureCadence = \MarketoSDK\Enums\Export\ProgramMemberFilter\NurtureCadenceEnum::from($value) : parent::assignMember($name, $value),
            'programId' => is_int($value) ? $this->programId = $value : parent::assignMember($name, $value),
            'programIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->programIds = new \MarketoSDK\Collections\Export\ActivityFilter\TypeIdsCollection($value) : parent::assignMember($name, $value),
            'statusNames' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->statusNames = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'updatedAt' => $value instanceof \stdClass ? $this->updatedAt = new \MarketoSDK\DTOs\DateRange($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
