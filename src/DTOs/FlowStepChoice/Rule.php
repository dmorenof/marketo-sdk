<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\FlowStepChoice;

/**
 * Condition describing when a flow step choice applies
 */
final class Rule extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'ruleTypeId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Name of the field tested by the condition
     */
    public string $name;
    /**
     * Condition operator, for example 'is', 'is not', 'contains'
     */
    public string $operator;
    /**
     * Type of the condition
     */
    public \MarketoSDK\Enums\FlowStepChoice\Rule\RuleTypeEnum $ruleType;
    /**
     * Id of the activity type or field tested by the condition
     * Format: int32
     */
    public int $ruleTypeId {
        set {
            $this->assigning('ruleTypeId', $value);
            $this->ruleTypeId = $value;
        }
    }
    /**
     * Values the condition matches
     */
    public \MarketoSDK\Collections\StringCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'ruleType' => is_string($value) ? $this->ruleType = \MarketoSDK\Enums\FlowStepChoice\Rule\RuleTypeEnum::from($value) : parent::assignMember($name, $value),
            'ruleTypeId' => is_int($value) ? $this->ruleTypeId = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->values = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
