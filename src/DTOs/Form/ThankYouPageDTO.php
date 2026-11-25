<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Form;

final class ThankYouPageDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'default' => 'default_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'default_' => 'default',
];

    public bool $default_;
    public string $followupType;
    public \MarketoSDK\DTOs\Form\ThankYouPageDTO\FollowupValueDTO $followupValue;
    public string $operator;
    public string $subjectField;
    public \MarketoSDK\Collections\StringCollection $values;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'followupType' => is_string($value) ? $this->followupType = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'subjectField' => is_string($value) ? $this->subjectField = $value : parent::assignMember($name, $value),
            'values' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->values = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
