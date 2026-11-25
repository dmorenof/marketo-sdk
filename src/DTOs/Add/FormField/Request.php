<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Add\FormField;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fieldId',
];

    protected const array VALIDATION = [
    'blankFields' => [
        'format' => 'int32',
    ],
    'fieldWidth' => [
        'format' => 'int32',
    ],
    'labelWidth' => [
        'format' => 'int32',
    ],
    'maxLength' => [
        'format' => 'int32',
    ],
    'visibleLines' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of blank fields to show when progressive profiling is enabled
     * Format: int32
     */
    public int $blankFields {
        set {
            $this->assigning('blankFields', $value);
            $this->blankFields = $value;
        }
    }
    /**
     * Optional default value for the field
     */
    public string $defaultValue;
    /**
     * Id of the field
     */
    public string $fieldId;
    /**
     * Specifies the field type.
     */
    public string $fieldType;
    /**
     * Width of the input or select element
     * Format: int32
     */
    public int $fieldWidth {
        set {
            $this->assigning('fieldWidth', $value);
            $this->fieldWidth = $value;
        }
    }
    /**
     * Whether the field should prefill. Default true
     */
    public bool $formPrefill;
    /**
     * Hint text for the field
     */
    public string $hintText;
    /**
     * Whether the field should be checked upon loading. Default false
     */
    public bool $initiallyChecked;
    /**
     * Instructions for the field
     */
    public string $instructions;
    /**
     * Whether the field is marked as sensitive. Default false
     */
    public bool $isSensitive;
    /**
     * Label of the field
     */
    public string $label;
    /**
     * Whether the field label should be displayed to the right of the input/select element. Default false
     */
    public bool $labelToRight;
    /**
     * Width of the field label element
     * Format: int32
     */
    public int $labelWidth {
        set {
            $this->assigning('labelWidth', $value);
            $this->labelWidth = $value;
        }
    }
    /**
     * Optional input mask for the field
     */
    public string $maskInput;
    /**
     * Maximum length for text type fields
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    /**
     * Maximum value accepted by the field
     * Format: float
     */
    public float $maxValue;
    /**
     * Minimum value accepted by the field
     * Format: float
     */
    public float $minValue;
    /**
     * Whether the field should allow multiple selections. Default false
     */
    public bool $multiSelect;
    /**
     * Whether the field is required to submit the form. Default false
     */
    public bool $required;
    /**
     * Validation message to display on failed validation
     */
    public string $validationMessage;
    /**
     * Comma-separated list of accepted values for the field. Only for select-field types
     */
    public string $values;
    /**
     * Number of lines to display for the field element
     * Format: int32
     */
    public int $visibleLines {
        set {
            $this->assigning('visibleLines', $value);
            $this->visibleLines = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blankFields' => is_int($value) ? $this->blankFields = $value : parent::assignMember($name, $value),
            'defaultValue' => is_string($value) ? $this->defaultValue = $value : parent::assignMember($name, $value),
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'fieldType' => is_string($value) ? $this->fieldType = $value : parent::assignMember($name, $value),
            'fieldWidth' => is_int($value) ? $this->fieldWidth = $value : parent::assignMember($name, $value),
            'formPrefill' => is_bool($value) ? $this->formPrefill = $value : parent::assignMember($name, $value),
            'hintText' => is_string($value) ? $this->hintText = $value : parent::assignMember($name, $value),
            'initiallyChecked' => is_bool($value) ? $this->initiallyChecked = $value : parent::assignMember($name, $value),
            'instructions' => is_string($value) ? $this->instructions = $value : parent::assignMember($name, $value),
            'isSensitive' => is_bool($value) ? $this->isSensitive = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'labelToRight' => is_bool($value) ? $this->labelToRight = $value : parent::assignMember($name, $value),
            'labelWidth' => is_int($value) ? $this->labelWidth = $value : parent::assignMember($name, $value),
            'maskInput' => is_string($value) ? $this->maskInput = $value : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'maxValue' => is_float($value) ? $this->maxValue = $value : parent::assignMember($name, $value),
            'minValue' => is_float($value) ? $this->minValue = $value : parent::assignMember($name, $value),
            'multiSelect' => is_bool($value) ? $this->multiSelect = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'validationMessage' => is_string($value) ? $this->validationMessage = $value : parent::assignMember($name, $value),
            'values' => is_string($value) ? $this->values = $value : parent::assignMember($name, $value),
            'visibleLines' => is_int($value) ? $this->visibleLines = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
