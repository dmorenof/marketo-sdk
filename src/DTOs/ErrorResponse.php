<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * ErrorResponse
 */
final class ErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\Collections\ErrorResponse\ErrorsCollection $errors;
    public string $requestId;
    public bool $success;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \MarketoSDK\Collections\ErrorResponse\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ContentWaveErrorDTO::class)) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
