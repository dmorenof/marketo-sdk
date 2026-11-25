<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lp\FormField;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'blankFields' => [
        'format' => 'int32',
    ],
    'columnNumber' => [
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
    'rowNumber' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $blankFields {
        set {
            $this->assigning('blankFields', $value);
            $this->blankFields = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $columnNumber {
        set {
            $this->assigning('columnNumber', $value);
            $this->columnNumber = $value;
        }
    }
    public string $dataType;
    public string $defaultValue;
    public \MarketoSDK\DTOs\Lp\FormField\Response\MetaDataDTO $fieldMetaData;
    /**
     * Format: int32
     */
    public int $fieldWidth {
        set {
            $this->assigning('fieldWidth', $value);
            $this->fieldWidth = $value;
        }
    }
    public \MarketoSDK\Collections\StringCollection $fields;
    public bool $formPrefill;
    public string $hintText;
    public string $id;
    public string $instructions;
    public bool $isSensitive;
    public string $label;
    /**
     * Format: int32
     */
    public int $labelWidth {
        set {
            $this->assigning('labelWidth', $value);
            $this->labelWidth = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    public bool $required;
    /**
     * Format: int32
     */
    public int $rowNumber {
        set {
            $this->assigning('rowNumber', $value);
            $this->rowNumber = $value;
        }
    }
    public string $text;
    public \MarketoSDK\DTOs\Lp\FormField\Response\ValidationMessageDTO $validationMessage;
    public \MarketoSDK\DTOs\Form\FieldVisibilityRule\Response $visibilityRules;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blankFields' => is_int($value) ? $this->blankFields = $value : parent::assignMember($name, $value),
            'columnNumber' => is_int($value) ? $this->columnNumber = $value : parent::assignMember($name, $value),
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'defaultValue' => is_string($value) ? $this->defaultValue = $value : parent::assignMember($name, $value),
            'fieldWidth' => is_int($value) ? $this->fieldWidth = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->fields = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'formPrefill' => is_bool($value) ? $this->formPrefill = $value : parent::assignMember($name, $value),
            'hintText' => is_string($value) ? $this->hintText = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'instructions' => is_string($value) ? $this->instructions = $value : parent::assignMember($name, $value),
            'isSensitive' => is_bool($value) ? $this->isSensitive = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'labelWidth' => is_int($value) ? $this->labelWidth = $value : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'rowNumber' => is_int($value) ? $this->rowNumber = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'visibilityRules' => $value instanceof \stdClass ? $this->visibilityRules = new \MarketoSDK\DTOs\Form\FieldVisibilityRule\Response($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
