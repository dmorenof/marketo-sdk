<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class SendSampleResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'result',
        'service',
    ];

    /**
     * Whether call was successful
     */
    public bool $result;
    /**
     * API call name
     */
    public \MarketoSDK\Enums\SendSampleResponse\ServiceEnum $service;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'result' => is_bool($value) ? $this->result = $value : parent::assignMember($name, $value),
            'service' => is_string($value) ? $this->service = \MarketoSDK\Enums\SendSampleResponse\ServiceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
