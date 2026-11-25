<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class TriggerCampaignRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'input',
    ];

    /**
     * Object describing trigger configuration for the campaign
     */
    public \MarketoSDK\DTOs\TriggerCampaignData $input;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'input' => $value instanceof \stdClass ? $this->input = new \MarketoSDK\DTOs\TriggerCampaignData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
