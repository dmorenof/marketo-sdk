<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class CampaignRules extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Filter rule types
     */
    public \MarketoSDK\Collections\Smart\CampaignRules\FiltersCollection $filters;
    /**
     * Predictive filter rule types. Present when predictive attributes are available
     */
    public \MarketoSDK\DTOs\Smart\CampaignRules\PredictiveFiltersDTO $predictiveFilters;
    /**
     * Trigger rule types
     */
    public \MarketoSDK\Collections\Smart\CampaignRules\FiltersCollection $triggers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filters' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->filters = new \MarketoSDK\Collections\Smart\CampaignRules\FiltersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\CampaignRuleType::class)) : parent::assignMember($name, $value),
            'triggers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->triggers = new \MarketoSDK\Collections\Smart\CampaignRules\FiltersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\CampaignRuleType::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
