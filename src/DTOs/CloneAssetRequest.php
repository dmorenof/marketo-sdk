<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * CloneAssetRequest
 */
final class CloneAssetRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'assetId',
        'newAsset',
    ];

    public string $assetId;
    public \MarketoSDK\DTOs\CloneNewAsset $newAsset;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'assetId' => is_string($value) ? $this->assetId = $value : parent::assignMember($name, $value),
            'newAsset' => $value instanceof \stdClass ? $this->newAsset = new \MarketoSDK\DTOs\CloneNewAsset($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
