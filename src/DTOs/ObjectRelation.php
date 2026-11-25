<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ObjectRelation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'field',
    'relatedTo',
    'type',
];

    /**
     * API Name of link field
     */
    public string $field;
    /**
     * Object to which the field is linked
     */
    public \MarketoSDK\DTOs\RelatedObject $relatedTo;
    /**
     * Type of the relationship field
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'relatedTo' => $value instanceof \stdClass ? $this->relatedTo = new \MarketoSDK\DTOs\RelatedObject($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
