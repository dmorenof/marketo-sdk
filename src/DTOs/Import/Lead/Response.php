<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Import\Lead;

/**
 * Response containing import status information
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'batchId',
    'numOfLeadsProcessed',
    'status',
];

    protected const array VALIDATION = [
    'batchId' => [
        'format' => 'int32',
    ],
    'numOfLeadsProcessed' => [
        'format' => 'int32',
    ],
    'numOfRowsFailed' => [
        'format' => 'int32',
    ],
    'numOfRowsWithWarning' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique integer id of the import batch
     * Format: int32
     */
    public int $batchId {
        set {
            $this->assigning('batchId', $value);
            $this->batchId = $value;
        }
    }
    public string $importId;
    public string $message;
    /**
     * Number of rows processed so far
     * Format: int32
     */
    public int $numOfLeadsProcessed {
        set {
            $this->assigning('numOfLeadsProcessed', $value);
            $this->numOfLeadsProcessed = $value;
        }
    }
    /**
     * Number of rows failed so far
     * Format: int32
     */
    public int $numOfRowsFailed {
        set {
            $this->assigning('numOfRowsFailed', $value);
            $this->numOfRowsFailed = $value;
        }
    }
    /**
     * Number of rows with a warning so far
     * Format: int32
     */
    public int $numOfRowsWithWarning {
        set {
            $this->assigning('numOfRowsWithWarning', $value);
            $this->numOfRowsWithWarning = $value;
        }
    }
    /**
     * Status of the batch
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batchId' => is_int($value) ? $this->batchId = $value : parent::assignMember($name, $value),
            'importId' => is_string($value) ? $this->importId = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'numOfLeadsProcessed' => is_int($value) ? $this->numOfLeadsProcessed = $value : parent::assignMember($name, $value),
            'numOfRowsFailed' => is_int($value) ? $this->numOfRowsFailed = $value : parent::assignMember($name, $value),
            'numOfRowsWithWarning' => is_int($value) ? $this->numOfRowsWithWarning = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
