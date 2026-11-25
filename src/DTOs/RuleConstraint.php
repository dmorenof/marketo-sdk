<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class RuleConstraint extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Data type of the constraint value
     */
    public string $dataType;
    /**
     * Whether the constraint is a person or company field
     */
    public bool $dbAttrib;
    /**
     * Id of the person or company field
     */
    public string $dbAttribId;
    /**
     * Object the field belongs to
     */
    public string $dbObject;
    /**
     * Id of the constraint. Built-in constraints have negative ids
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the constraint
     */
    public string $name;
    /**
     * Default operator of the constraint
     */
    public string $operator;
    /**
     * Whether this is the primary constraint of the rule type
     */
    public bool $primary;
    /**
     * Field type of the constraint, for example standard or custom
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'dbAttrib' => is_bool($value) ? $this->dbAttrib = $value : parent::assignMember($name, $value),
            'dbAttribId' => is_string($value) ? $this->dbAttribId = $value : parent::assignMember($name, $value),
            'dbObject' => is_string($value) ? $this->dbObject = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            'primary' => is_bool($value) ? $this->primary = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
