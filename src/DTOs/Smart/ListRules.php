<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

/**
 * JSON representation of smart list rules
 */
final class ListRules extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'filterMatchType',
        'filters',
        'triggers',
    ];

    /**
     * Custom rule logic, for example 1 and (2 or 3). Present when filterMatchType is custom
     */
    public string $filterCustomRuleLogic;
    /**
     * Smart list filter match type (rule logic)
     */
    public \MarketoSDK\Enums\Smart\ListRules\MatchTypeEnum $filterMatchType;
    /**
     * List of smart list filters
     */
    public \MarketoSDK\Collections\Smart\ListRules\FiltersCollection $filters;
    /**
     * List of smart list triggers
     */
    public \MarketoSDK\Collections\Smart\ListRules\FiltersCollection $triggers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filterCustomRuleLogic' => is_string($value) ? $this->filterCustomRuleLogic = $value : parent::assignMember($name, $value),
            'filterMatchType' => is_string($value) ? $this->filterMatchType = \MarketoSDK\Enums\Smart\ListRules\MatchTypeEnum::from($value) : parent::assignMember($name, $value),
            'filters' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->filters = new \MarketoSDK\Collections\Smart\ListRules\FiltersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\ListFilters::class)) : parent::assignMember($name, $value),
            'triggers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->triggers = new \MarketoSDK\Collections\Smart\ListRules\FiltersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\ListFilters::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
