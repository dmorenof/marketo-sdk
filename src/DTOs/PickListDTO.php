<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class PickListDTO extends \Dmorenof\SdkRuntime\DTO
{
    public bool $isDefault;
    public string $label;
    public bool $selected;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'isDefault' => is_bool($value) ? $this->isDefault = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'selected' => is_bool($value) ? $this->selected = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
