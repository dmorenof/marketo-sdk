<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class FlowStepChoice extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'default_',
        'id',
    ];

    protected const array PROPERTY_MAP = [
        'default' => 'default_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'default_' => 'default',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    public \MarketoSDK\Collections\FlowStepChoice\AttributesCollection $attributes;
    /**
     * Whether this is the default choice for the flow step
     */
    public bool $default_;
    /**
     * Id of the choice, used in choice mutation endpoints
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Condition for the choice, present on non-default choices
     */
    public \MarketoSDK\DTOs\FlowStepChoice\Rule $rule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attributes = new \MarketoSDK\Collections\FlowStepChoice\AttributesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\FlowStepChoice\Attribute::class)) : parent::assignMember($name, $value),
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'rule' => $value instanceof \stdClass ? $this->rule = new \MarketoSDK\DTOs\FlowStepChoice\Rule($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
