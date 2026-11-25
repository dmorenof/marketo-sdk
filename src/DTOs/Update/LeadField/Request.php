<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\LeadField;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'input',
];

    /**
     * Single lead field for input
     */
    public \MarketoSDK\Collections\Update\LeadField\Request\InputCollection $input;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\Update\LeadField\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Update\LeadField::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
