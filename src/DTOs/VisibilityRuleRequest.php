<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class VisibilityRuleRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'operator',
    'subjectField',
    'values',
];

    public string $altLabel;
    /**
     * Operation to apply to target field. Evaluated against the list of values when applicable.
     */
    public \MarketoSDK\Enums\VisibilityRuleRequest\OperatorEnum $operator;
    /**
     * Alternative label to display when rules are applied.
     */
    public \MarketoSDK\Collections\Form\VisibilityRuleDTO\FilterValuesCollection $pickListValues;
    /**
     * Target field id to apply the operation defined by operator to
     */
    public string $subjectField;
    /**
     * Comma-separated list of values to match against. Valid for operators 'is', 'isNot', 'startsWith', 'notStartsWith', 'endsWith', 'notEndsWith', 'contains', and 'notContains'
     */
    public \MarketoSDK\Collections\StringCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altLabel' => is_string($value) ? $this->altLabel = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = \MarketoSDK\Enums\VisibilityRuleRequest\OperatorEnum::from($value) : parent::assignMember($name, $value),
            'pickListValues' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->pickListValues = new \MarketoSDK\Collections\Form\VisibilityRuleDTO\FilterValuesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\PickListDTO::class)) : parent::assignMember($name, $value),
            'subjectField' => is_string($value) ? $this->subjectField = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->values = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
