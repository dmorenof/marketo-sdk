<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class FieldsMetaDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array VALIDATION = [
        'fieldWidth' => [
            'format' => 'int32',
        ],
        'labelWidth' => [
            'format' => 'int32',
        ],
        'maxLength' => [
            'format' => 'int32',
        ],
        'visibleRows' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Type of field
     */
    public string $dataType;
    /**
     * Optional default value for the field
     */
    public string $defaultValue;
    /**
     * Description of the field
     */
    public string $description;
    /**
     * Optional input mask for the field
     */
    public string $fieldMaskValues;
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
     * Id of the field
     */
    public string $id;
    /**
     * Whether the field should be checked upon loading. Default false
     */
    public bool $initiallyChecked;
    /**
     * Whether the field label should be displayed to the right of the input/select element. Default false
     */
    public bool $isLabelToRight;
    /**
     * Whether the field should allow multiple selections. Default false
     */
    public bool $isMultiselect;
    /**
     * Whether the field is required to submit the form. Default false
     */
    public bool $isRequired;
    /**
     * Whether the field is marked as sensitive. Default false
     */
    public bool $isSensitive;
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
    public float $maximumNumber;
    /**
     * Minimum value accepted by the field
     * Format: float
     */
    public float $minimumNumber;
    /**
     * Comma-separated list of available picklist values for the field
     */
    public string $picklistValues;
    /**
     * Placeholder text for the field
     */
    public string $placeholderText;
    /**
     * Validation message to display on failed validation
     */
    public string $validationMessage;
    /**
     * Number of rows visible for progressive profiling
     * Format: int32
     */
    public int $visibleRows {
        set {
            $this->assigning('visibleRows', $value);
            $this->visibleRows = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'defaultValue' => is_string($value) ? $this->defaultValue = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'fieldMaskValues' => is_string($value) ? $this->fieldMaskValues = $value : parent::assignMember($name, $value),
            'fieldWidth' => is_int($value) ? $this->fieldWidth = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'initiallyChecked' => is_bool($value) ? $this->initiallyChecked = $value : parent::assignMember($name, $value),
            'isLabelToRight' => is_bool($value) ? $this->isLabelToRight = $value : parent::assignMember($name, $value),
            'isMultiselect' => is_bool($value) ? $this->isMultiselect = $value : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            'isSensitive' => is_bool($value) ? $this->isSensitive = $value : parent::assignMember($name, $value),
            'labelWidth' => is_int($value) ? $this->labelWidth = $value : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'maximumNumber' => is_float($value) ? $this->maximumNumber = $value : parent::assignMember($name, $value),
            'minimumNumber' => is_float($value) ? $this->minimumNumber = $value : parent::assignMember($name, $value),
            'picklistValues' => is_string($value) ? $this->picklistValues = $value : parent::assignMember($name, $value),
            'placeholderText' => is_string($value) ? $this->placeholderText = $value : parent::assignMember($name, $value),
            'validationMessage' => is_string($value) ? $this->validationMessage = $value : parent::assignMember($name, $value),
            'visibleRows' => is_int($value) ? $this->visibleRows = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
