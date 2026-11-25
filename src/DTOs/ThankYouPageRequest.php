<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ThankYouPageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'followupType',
    'followupValue',
    'operator',
    'subjectField',
    'values',
];

    protected const array PROPERTY_MAP = [
    'default' => 'default_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'default_' => 'default',
];

    /**
     * When true, this is the default rule, and will be applied when a user does not qualify for any of the other rules
     */
    public bool $default_;
    /**
     * Type of followup. When set to url, will follow to the url set in followupValue. When set to lp, will follow to the Landing page with the id given in followupValue
     */
    public string $followupType;
    /**
     * Where to follow to on submission. Given as a URL or and Integer depending on followupType
     */
    public string $followupValue;
    /**
     * Operator to evaluate aginst the subject field
     */
    public string $operator;
    /**
     * Field to apply to operator to
     */
    public string $subjectField;
    /**
     * Comma-separated list of values to compare to with the operator
     */
    public \MarketoSDK\Collections\StringCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'followupType' => is_string($value) ? $this->followupType = $value : parent::assignMember($name, $value),
            'followupValue' => is_string($value) ? $this->followupValue = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'subjectField' => is_string($value) ? $this->subjectField = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->values = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
