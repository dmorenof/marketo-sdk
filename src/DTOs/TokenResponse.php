<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class TokenResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'folder',
    ];

    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     * Example: "{\"id\":1001,\"type\":\"Program\"}"
     */
    public string $folder;
    /**
     * List of tokens in the folder
     */
    public \MarketoSDK\Collections\TokenResponse\TokensCollection $tokens;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'folder' => is_string($value) ? $this->folder = $value : parent::assignMember($name, $value),
            'tokens' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tokens = new \MarketoSDK\Collections\TokenResponse\TokensCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\TokenDTO::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
