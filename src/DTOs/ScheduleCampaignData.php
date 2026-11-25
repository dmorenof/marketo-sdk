<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ScheduleCampaignData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name of the resulting program. When set, this attribute will cause the campaign, parent program, and all of its assets, to be created with the resulting new name. The parent program will be cloned and the newly created campaign will be scheduled. The resulting program is created underneath the parent. Programs with snippets, push notifications, in-app messages, static lists, reports, and social assets may not be cloned in this way
     */
    public string $cloneToProgramName;
    /**
     * Datetime to run the campaign at. If unset, the campaign will be run five minutes after the call is made
     * Format: date-time
     */
    public string $runAt;
    /**
     * List of my tokens to replace during the run of the target campaign. The tokens must be available in a parent program or folder to be replaced during the run
     */
    public \MarketoSDK\Collections\ScheduleCampaignData\TokensCollection $tokens;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cloneToProgramName' => is_string($value) ? $this->cloneToProgramName = $value : parent::assignMember($name, $value),
            'runAt' => is_string($value) ? $this->runAt = $value : parent::assignMember($name, $value),
            'tokens' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tokens = new \MarketoSDK\Collections\ScheduleCampaignData\TokensCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Token::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
