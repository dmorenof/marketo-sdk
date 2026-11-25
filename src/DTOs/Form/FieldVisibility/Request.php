<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Form\FieldVisibility;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ruleType',
        'rules',
    ];

    /**
     * Type of rule to apply
     */
    public \MarketoSDK\Enums\Form\FieldVisibility\Request\RuleTypeEnum $ruleType;
    /**
     * JSON Array of rules
     */
    public \MarketoSDK\Collections\Form\FieldVisibility\Request\RulesCollection $rules;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ruleType' => is_string($value) ? $this->ruleType = \MarketoSDK\Enums\Form\FieldVisibility\Request\RuleTypeEnum::from($value) : parent::assignMember($name, $value),
            'rules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rules = new \MarketoSDK\Collections\Form\FieldVisibility\Request\RulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\VisibilityRuleRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
