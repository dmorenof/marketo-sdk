<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\LandingPage;

final class Domain extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hostname',
        'type',
    ];

    /**
     * The hostname for the landing pages
     */
    public string $hostname;
    /**
     * Specifies type of hostname
     */
    public \MarketoSDK\Enums\LandingPage\Domain\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hostname' => is_string($value) ? $this->hostname = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\LandingPage\Domain\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
