<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ProgramMember;

final class Status extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'leadId',
    ];

    /**
     * Unique integer id of a lead record
     * Format: int64
     */
    public int $leadId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'leadId' => is_int($value) ? $this->leadId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
