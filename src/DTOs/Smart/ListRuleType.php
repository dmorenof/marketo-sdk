<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart;

final class ListRuleType extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'name',
    'type',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public \MarketoSDK\Collections\Smart\CampaignFlowStepActionType\ConstraintsCollection $constraints;
    /**
     * Id of the rule type
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the rule type
     */
    public string $name;
    /**
     * Type of the rule
     */
    public \MarketoSDK\Enums\Smart\ListRuleType\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'constraints' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->constraints = new \MarketoSDK\Collections\Smart\CampaignFlowStepActionType\ConstraintsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\RuleConstraint::class)) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Smart\ListRuleType\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
