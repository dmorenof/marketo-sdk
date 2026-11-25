<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class TriggerCampaignData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'leads',
];

    /**
     * List of leads for input
     */
    public \MarketoSDK\Collections\TriggerCampaignData\LeadsCollection $leads;
    /**
     * List of my tokens to replace during the run of the target campaign. The tokens must be available in a parent program or folder to be replaced during the run
     */
    public \MarketoSDK\Collections\ScheduleCampaignData\TokensCollection $tokens;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'leads' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->leads = new \MarketoSDK\Collections\TriggerCampaignData\LeadsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\InputLead::class)) : parent::assignMember($name, $value),
            'tokens' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tokens = new \MarketoSDK\Collections\ScheduleCampaignData\TokensCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Token::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
