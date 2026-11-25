<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class CampaignFlowStepTypes extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flow step types
     */
    public \MarketoSDK\Collections\Smart\CampaignFlowStepTypes\StepTypesCollection $flowStepTypes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flowStepTypes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->flowStepTypes = new \MarketoSDK\Collections\Smart\CampaignFlowStepTypes\StepTypesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\CampaignFlowStepType::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
