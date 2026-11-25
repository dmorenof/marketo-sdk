<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Name-Value pair
 */
final class Attribute extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'value',
    ];

    public string $apiName;
    /**
     * Name of the attribute
     */
    public string $name;
    /**
     * Value of the attribute
     */
    public \MarketoSDK\DTOs\Attribute\ValueDTO $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
