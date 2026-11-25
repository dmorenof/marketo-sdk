<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ResponseOf;

final class Identity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'access_token',
    'expires_in',
    'scope',
    'token_type',
];

    /**
     * The token that you pass with subsequent calls to authenticate with the target instance
     */
    public string $access_token;
    /**
     * Remaining lifespan of the current token in seconds
     */
    public int $expires_in;
    /**
     * The owning API-only user of the custom service that was used to authenticate
     */
    public string $scope;
    /**
     * The OAuth authentication method
     */
    public \MarketoSDK\Enums\ResponseOf\Identity\TokenTypeEnum $token_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_token' => is_string($value) ? $this->access_token = $value : parent::assignMember($name, $value),
            'expires_in' => is_int($value) ? $this->expires_in = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = $value : parent::assignMember($name, $value),
            'token_type' => is_string($value) ? $this->token_type = \MarketoSDK\Enums\ResponseOf\Identity\TokenTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
