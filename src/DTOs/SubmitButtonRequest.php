<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SubmitButtonRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'buttonPosition' => [
        'format' => 'int32',
    ],
];

    /**
     * Location in pixels of the button relative to the left of the form
     * Format: int32
     */
    public int $buttonPosition {
        set {
            $this->assigning('buttonPosition', $value);
            $this->buttonPosition = $value;
        }
    }
    /**
     * Style of the button
     */
    public string $buttonStyle;
    /**
     * Label text of the button
     */
    public string $label;
    /**
     * Waiting text of the button
     */
    public string $waitingLabel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttonPosition' => is_int($value) ? $this->buttonPosition = $value : parent::assignMember($name, $value),
            'buttonStyle' => is_string($value) ? $this->buttonStyle = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'waitingLabel' => is_string($value) ? $this->waitingLabel = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
