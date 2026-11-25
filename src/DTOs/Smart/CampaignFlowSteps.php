<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class CampaignFlowSteps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flow step action types
     */
    public \MarketoSDK\Collections\Smart\CampaignFlowSteps\FlowStepsCollection $flowSteps;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flowSteps' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->flowSteps = new \MarketoSDK\Collections\Smart\CampaignFlowSteps\FlowStepsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\CampaignFlowStepActionType::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
