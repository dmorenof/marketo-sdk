<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\FlowStepChoice;

final class Attribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
    ];

    protected const array VALIDATION = [
        'activityTypeAttribId' => [
            'format' => 'int32',
        ],
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Id of the activity type attribute definition
     * Format: int32
     */
    public int $activityTypeAttribId {
        set {
            $this->assigning('activityTypeAttribId', $value);
            $this->activityTypeAttribId = $value;
        }
    }
    /**
     * Data type of the attribute value
     */
    public string $dataType;
    /**
     * Display format of the value
     */
    public string $format;
    /**
     * Id of the attribute
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the attribute
     */
    public string $name;
    /**
     * Whether this is the primary attribute of the flow step
     */
    public bool $primary;
    /**
     * Value of the attribute
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityTypeAttribId' => is_int($value) ? $this->activityTypeAttribId = $value : parent::assignMember($name, $value),
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'primary' => is_bool($value) ? $this->primary = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
