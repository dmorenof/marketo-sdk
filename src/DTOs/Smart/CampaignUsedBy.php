<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class CampaignUsedBy extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Assets that use the smart campaign
     */
    public \MarketoSDK\Collections\Smart\CampaignUsedBy\UsedByCollection $usedBy;
    /**
     * Number of assets that use the smart campaign
     */
    public string $usedByCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'usedBy' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->usedBy = new \MarketoSDK\Collections\Smart\CampaignUsedBy\UsedByCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\CampaignUsedByAsset::class)) : parent::assignMember($name, $value),
            'usedByCount' => is_string($value) ? $this->usedByCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
