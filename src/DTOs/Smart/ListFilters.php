<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

/**
 * JSON representation of smart list filters
 */
final class ListFilters extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
        'operator',
        'ruleType',
        'ruleTypeId',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
        'ruleTypeId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * List of smart list conditions
     */
    public \MarketoSDK\Collections\Smart\ListFilters\ConditionsCollection $conditions;
    /**
     * Id of the filter
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of filter
     */
    public string $name;
    /**
     * Name of operator
     */
    public string $operator;
    /**
     * Type of rule
     */
    public \MarketoSDK\Enums\Smart\ListFilters\RuleTypeEnum $ruleType;
    /**
     * Id of the rule type
     * Format: int32
     */
    public int $ruleTypeId {
        set {
            $this->assigning('ruleTypeId', $value);
            $this->ruleTypeId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \MarketoSDK\Collections\Smart\ListFilters\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Smart\ListConditions::class)) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'ruleType' => is_string($value) ? $this->ruleType = \MarketoSDK\Enums\Smart\ListFilters\RuleTypeEnum::from($value) : parent::assignMember($name, $value),
            'ruleTypeId' => is_int($value) ? $this->ruleTypeId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
