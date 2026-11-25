<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\Rule\RuleIdJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'attributeId',
    'values',
];

    /**
     * JSON representation of the constraint to set, with members 'id' and 'type' which may be 'activity' or 'attribute', for example {"id":16,"type":"activity"}. 'id' is the id of a constraint of the rule type and 'type' is the type of the rule type, both returned by Get Smart List Rules
     */
    public string $attributeId;
    /**
     * Comparison operator, for example 'is', 'is not', 'contains', 'starts with'
     */
    public string $operator;
    /**
     * Comma-separated list of values, for example San Francisco,Portland. Enclose a value that contains a comma in double quotes
     */
    public string $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributeId' => is_string($value) ? $this->attributeId = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'values' => is_string($value) ? $this->values = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
