<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Bulk\UsedBy;

/**
 * BulkUsedByResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $requestId;
    public \MarketoSDK\Collections\Bulk\UsedBy\Response\ResultCollection $result;
    public bool $success;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'result' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->result = new \MarketoSDK\Collections\Bulk\UsedBy\Response\ResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Bulk\UsedByItemDTO::class)) : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
