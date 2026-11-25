<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Export;

/**
 * Response containing export job status information
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'exportId',
    'status',
];

    /**
     * Date when the export request was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Error message in case of "Failed" status
     */
    public string $errorMsg;
    /**
     * Unique id of the export job
     */
    public string $exportId;
    /**
     * SHA-256 hash of exported file. This will have a value only when status is "Completed", otherwise null
     */
    public string $fileChecksum;
    /**
     * Size of exported file in bytes. This will have a value only when status is "Completed", otherwise null
     * Format: int64
     */
    public int $fileSize;
    /**
     * Finish time of export job. This will have value only when status is "Completed" or "Failed", otherwise null
     * Format: date-time
     */
    public string $finishedAt;
    /**
     * Format of file as given in the request ("CSV", "TSV", "SSV")
     */
    public string $format;
    /**
     * Number of records in the export file. This will have value only when status is "Completed", otherwise null
     * Format: int64
     */
    public int $numberOfRecords;
    /**
     * Queue time of export job. This will have value when "Queued" status is reached, before that null
     * Format: date-time
     */
    public string $queuedAt;
    /**
     * Start time of export job. This will have value when "Processing" status is reached, before that null
     * Format: date-time
     */
    public string $startedAt;
    /**
     * Status of the export job ("Created","Queued","Processing","Canceled","Completed","Failed")
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'errorMsg' => is_string($value) ? $this->errorMsg = $value : parent::assignMember($name, $value),
            'exportId' => is_string($value) ? $this->exportId = $value : parent::assignMember($name, $value),
            'fileChecksum' => is_string($value) ? $this->fileChecksum = $value : parent::assignMember($name, $value),
            'fileSize' => is_int($value) ? $this->fileSize = $value : parent::assignMember($name, $value),
            'finishedAt' => is_string($value) ? $this->finishedAt = $value : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            'numberOfRecords' => is_int($value) ? $this->numberOfRecords = $value : parent::assignMember($name, $value),
            'queuedAt' => is_string($value) ? $this->queuedAt = $value : parent::assignMember($name, $value),
            'startedAt' => is_string($value) ? $this->startedAt = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
