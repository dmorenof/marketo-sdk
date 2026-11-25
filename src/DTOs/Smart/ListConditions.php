<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

/**
 * JSON representation of smart list conditions
 */
final class ListConditions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'values',
    ];

    protected const array VALIDATION = [
        'activityAttributeId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Id of the activity attribute. Present on conditions of activity rules
     * Format: int32
     */
    public int $activityAttributeId {
        set {
            $this->assigning('activityAttributeId', $value);
            $this->activityAttributeId = $value;
        }
    }
    /**
     * Name of the activity attribute. Present on conditions of activity rules
     */
    public string $activityAttributeName;
    /**
     * Id of the field. Present on conditions of attribute rules
     * Format: int64
     */
    public int $attributeId;
    /**
     * Name of the field. Present on conditions of attribute rules
     */
    public string $attributeName;
    /**
     * Validation error of the condition. Present when isError is true
     */
    public string $errorMessage;
    /**
     * Whether the condition has a validation error
     */
    public bool $isError;
    /**
     * Whether the condition is primary or not (first condition of the smart list)
     */
    public bool $isPrimary;
    /**
     * Value of operator
     */
    public string $operator;
    /**
     * List of values
     */
    public \MarketoSDK\Collections\StringCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityAttributeId' => is_int($value) ? $this->activityAttributeId = $value : parent::assignMember($name, $value),
            'activityAttributeName' => is_string($value) ? $this->activityAttributeName = $value : parent::assignMember($name, $value),
            'attributeId' => is_int($value) ? $this->attributeId = $value : parent::assignMember($name, $value),
            'attributeName' => is_string($value) ? $this->attributeName = $value : parent::assignMember($name, $value),
            'errorMessage' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            'isError' => is_bool($value) ? $this->isError = $value : parent::assignMember($name, $value),
            'isPrimary' => is_bool($value) ? $this->isPrimary = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->values = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
