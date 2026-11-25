<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Import\ProgramMember;

/**
 * Response containing import status information
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'batchId',
    'importId',
    'status',
];

    protected const array VALIDATION = [
    'batchId' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique integer id of the import job
     * Format: int32
     */
    public int $batchId {
        set {
            $this->assigning('batchId', $value);
            $this->batchId = $value;
        }
    }
    /**
     * Unique integer id of the import job
     */
    public string $importId;
    /**
     * Status of the import job
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batchId' => is_int($value) ? $this->batchId = $value : parent::assignMember($name, $value),
            'importId' => is_string($value) ? $this->importId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
