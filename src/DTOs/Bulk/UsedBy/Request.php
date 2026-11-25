<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Bulk\UsedBy;

/**
 * BulkUsedByRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'assetIds',
];

    /**
     * Asset IDs to query. Maximum 50 per request.
     */
    public \MarketoSDK\Collections\StringCollection $assetIds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'assetIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->assetIds = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
