<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class JsonNode extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
    'array' => 'array_',
    'float' => 'float_',
    'int' => 'int_',
    'null' => 'null_',
    'object' => 'object_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'array_' => 'array',
    'float_' => 'float',
    'int_' => 'int',
    'null_' => 'null',
    'object_' => 'object',
];

    public bool $array_;
    public bool $bigDecimal;
    public bool $bigInteger;
    public bool $binary;
    public bool $boolean;
    public bool $containerNode;
    public bool $double;
    public bool $float_;
    public bool $floatingPointNumber;
    public bool $int_;
    public bool $integralNumber;
    public bool $long;
    public bool $missingNode;
    public \MarketoSDK\Enums\JsonNode\NodeTypeEnum $nodeType;
    public bool $null_;
    public bool $number;
    public bool $object_;
    public bool $pojo;
    public bool $short;
    public bool $textual;
    public bool $valueNode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'array' => is_bool($value) ? $this->array_ = $value : parent::assignMember($name, $value),
            'bigDecimal' => is_bool($value) ? $this->bigDecimal = $value : parent::assignMember($name, $value),
            'bigInteger' => is_bool($value) ? $this->bigInteger = $value : parent::assignMember($name, $value),
            'binary' => is_bool($value) ? $this->binary = $value : parent::assignMember($name, $value),
            'boolean' => is_bool($value) ? $this->boolean = $value : parent::assignMember($name, $value),
            'containerNode' => is_bool($value) ? $this->containerNode = $value : parent::assignMember($name, $value),
            'double' => is_bool($value) ? $this->double = $value : parent::assignMember($name, $value),
            'float' => is_bool($value) ? $this->float_ = $value : parent::assignMember($name, $value),
            'floatingPointNumber' => is_bool($value) ? $this->floatingPointNumber = $value : parent::assignMember($name, $value),
            'int' => is_bool($value) ? $this->int_ = $value : parent::assignMember($name, $value),
            'integralNumber' => is_bool($value) ? $this->integralNumber = $value : parent::assignMember($name, $value),
            'long' => is_bool($value) ? $this->long = $value : parent::assignMember($name, $value),
            'missingNode' => is_bool($value) ? $this->missingNode = $value : parent::assignMember($name, $value),
            'nodeType' => is_string($value) ? $this->nodeType = \MarketoSDK\Enums\JsonNode\NodeTypeEnum::from($value) : parent::assignMember($name, $value),
            'null' => is_bool($value) ? $this->null_ = $value : parent::assignMember($name, $value),
            'number' => is_bool($value) ? $this->number = $value : parent::assignMember($name, $value),
            'object' => is_bool($value) ? $this->object_ = $value : parent::assignMember($name, $value),
            'pojo' => is_bool($value) ? $this->pojo = $value : parent::assignMember($name, $value),
            'short' => is_bool($value) ? $this->short = $value : parent::assignMember($name, $value),
            'textual' => is_bool($value) ? $this->textual = $value : parent::assignMember($name, $value),
            'valueNode' => is_bool($value) ? $this->valueNode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
