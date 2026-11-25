<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class IdentityRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'client_id',
    'client_secret',
    'grant_type',
];

    /**
     * Client ID from Admin > Integration > Launchpoint menu
     */
    public string $client_id;
    /**
     * Client Secret from Admin > Integration > Launchpoint menu
     */
    public string $client_secret;
    /**
     * Grant type
     */
    public \MarketoSDK\Enums\IdentityRequest\GrantTypeEnum $grant_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_id' => is_string($value) ? $this->client_id = $value : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'grant_type' => is_string($value) ? $this->grant_type = \MarketoSDK\Enums\IdentityRequest\GrantTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
