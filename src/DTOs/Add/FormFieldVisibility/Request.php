<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Add\FormFieldVisibility;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\Form\FieldVisibility\Request $visibilityRule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'visibilityRule' => $value instanceof \stdClass ? $this->visibilityRule = new \MarketoSDK\DTOs\Form\FieldVisibility\Request($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
