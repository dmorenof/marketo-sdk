<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update;

final class FieldPosition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'columnNumber',
        'fieldName',
        'rowNumber',
    ];

    protected const array VALIDATION = [
        'columnNumber' => [
            'format' => 'int32',
        ],
        'rowNumber' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Column number of the field
     * Format: int32
     */
    public int $columnNumber {
        set {
            $this->assigning('columnNumber', $value);
            $this->columnNumber = $value;
        }
    }
    /**
     * List of positions inside the fields. Only valid if the target is a fieldset
     */
    public \MarketoSDK\Collections\ReArrangeRequest\PositionsCollection $fieldList;
    /**
     * Id of the field
     */
    public string $fieldName;
    /**
     * Row number of the field
     * Format: int32
     */
    public int $rowNumber {
        set {
            $this->assigning('rowNumber', $value);
            $this->rowNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columnNumber' => is_int($value) ? $this->columnNumber = $value : parent::assignMember($name, $value),
            'fieldList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fieldList = new \MarketoSDK\Collections\ReArrangeRequest\PositionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Update\FieldPosition::class)) : parent::assignMember($name, $value),
            'fieldName' => is_string($value) ? $this->fieldName = $value : parent::assignMember($name, $value),
            'rowNumber' => is_int($value) ? $this->rowNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
