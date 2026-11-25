<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

final class Attribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dataType',
        'displayName',
        'id',
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
        'length' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Datatype of the field
     */
    public string $dataType;
    /**
     * UI display-name of the field
     */
    public string $displayName;
    /**
     * Unique integer id of the field
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Max length of the field. Only applicable to text, string, and text area.
     * Format: int32
     */
    public int $length {
        set {
            $this->assigning('length', $value);
            $this->length = $value;
        }
    }
    /**
     * Description of REST API usage attributes
     */
    public \MarketoSDK\DTOs\Lead\MapAttribute $rest;
    /**
     * Description of SOAP API usage attributes
     */
    public \MarketoSDK\DTOs\Lead\MapAttribute $soap;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dataType' => is_string($value) ? $this->dataType = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'length' => is_int($value) ? $this->length = $value : parent::assignMember($name, $value),
            'rest' => $value instanceof \stdClass ? $this->rest = new \MarketoSDK\DTOs\Lead\MapAttribute($value) : parent::assignMember($name, $value),
            'soap' => $value instanceof \stdClass ? $this->soap = new \MarketoSDK\DTOs\Lead\MapAttribute($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
