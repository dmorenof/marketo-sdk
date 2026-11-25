<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Form\VisibilityRule;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public string $formFieldId;
    public string $ruleType;
    public \MarketoSDK\Collections\Form\FieldVisibilityRule\Response\RulesCollection $rules;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'formFieldId' => is_string($value) ? $this->formFieldId = $value : parent::assignMember($name, $value),
            'ruleType' => is_string($value) ? $this->ruleType = $value : parent::assignMember($name, $value),
            'rules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rules = new \MarketoSDK\Collections\Form\FieldVisibilityRule\Response\RulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Form\VisibilityRuleDTO::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
