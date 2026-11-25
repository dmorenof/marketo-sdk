<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Bulk\Delete;

/**
 * BulkDeleteRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'assetIds',
];

    /**
     * Set of asset IDs to delete. Maximum 20 per request.
     */
    public \MarketoSDK\Collections\StringCollection $assetIds;
    /**
     * If true, deletes assets even if they are referenced by other assets.
     */
    public bool $ignoreUsedBy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'assetIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->assetIds = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'ignoreUsedBy' => is_bool($value) ? $this->ignoreUsedBy = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
