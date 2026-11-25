<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\LandingPage\Variable;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    /**
     * Integer id of the variable
     */
    public string $id;
    /**
     * Type of the variable
     */
    public string $type;
    /**
     * Value of the variable
     */
    public \MarketoSDK\DTOs\LandingPage\Variable\Response\ValueDTO $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
