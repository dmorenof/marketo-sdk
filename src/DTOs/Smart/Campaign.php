<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class Campaign extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'smartCampaignId',
    'updatedAt',
];

    protected const array VALIDATION = [
    'smartCampaignId' => [
        'format' => 'int32',
    ],
];

    /**
     * Datetime when the smart campaign was created
     */
    public string $createdAt;
    /**
     * Unique integer id of the smart campaign
     * Format: int32
     */
    public int $smartCampaignId {
        set {
            $this->assigning('smartCampaignId', $value);
            $this->smartCampaignId = $value;
        }
    }
    /**
     * Datetime when the smart campaign was most recently updated
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'smartCampaignId' => is_int($value) ? $this->smartCampaignId = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
