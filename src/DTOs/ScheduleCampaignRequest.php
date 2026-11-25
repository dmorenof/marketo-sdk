<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Record describe how to schedule the campaign
 */
final class ScheduleCampaignRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\ScheduleCampaignData $input;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'input' => $value instanceof \stdClass ? $this->input = new \MarketoSDK\DTOs\ScheduleCampaignData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
