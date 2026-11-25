<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Form;

final class VisibilityRuleDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $altLabel;
    public string $operator;
    public \MarketoSDK\Collections\Form\VisibilityRuleDTO\FilterValuesCollection $picklistFilterValues;
    public string $subjectField;
    public \MarketoSDK\Collections\StringCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altLabel' => is_string($value) ? $this->altLabel = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'picklistFilterValues' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->picklistFilterValues = new \MarketoSDK\Collections\Form\VisibilityRuleDTO\FilterValuesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\PickListDTO::class)) : parent::assignMember($name, $value),
            'subjectField' => is_string($value) ? $this->subjectField = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->values = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
