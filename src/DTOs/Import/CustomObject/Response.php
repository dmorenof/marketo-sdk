<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Import\CustomObject;

/**
 * Response containing import status information
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'batchId',
        'objectApiName',
        'operation',
        'status',
    ];

    protected const array VALIDATION = [
        'batchId' => [
            'format' => 'int32',
        ],
        'numOfObjectsProcessed' => [
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
    /**
     * Time spent on the batch
     */
    public string $importTime;
    /**
     * Status message of the batch
     */
    public string $message;
    /**
     * Number of rows processed so far
     * Format: int32
     */
    public int $numOfObjectsProcessed {
        set {
            $this->assigning('numOfObjectsProcessed', $value);
            $this->numOfObjectsProcessed = $value;
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
     * Object API Name
     */
    public string $objectApiName;
    /**
     * Bulk operation type. Can be import or export
     */
    public string $operation;
    /**
     * Status of the batch
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batchId' => is_int($value) ? $this->batchId = $value : parent::assignMember($name, $value),
            'importTime' => is_string($value) ? $this->importTime = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'numOfObjectsProcessed' => is_int($value) ? $this->numOfObjectsProcessed = $value : parent::assignMember($name, $value),
            'numOfRowsFailed' => is_int($value) ? $this->numOfRowsFailed = $value : parent::assignMember($name, $value),
            'numOfRowsWithWarning' => is_int($value) ? $this->numOfRowsWithWarning = $value : parent::assignMember($name, $value),
            'objectApiName' => is_string($value) ? $this->objectApiName = $value : parent::assignMember($name, $value),
            'operation' => is_string($value) ? $this->operation = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
