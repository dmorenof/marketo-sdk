<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ChangeLeadProgramStatusRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'input',
        'status',
    ];

    /**
     * List of leads for input
     */
    public \MarketoSDK\Collections\ChangeLeadProgramStatusRequest\InputCollection $input;
    /**
     * Program status of the record. Permissible values can be retrieve from the Get Channel by Name API for the designated program's channel
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\ChangeLeadProgramStatusRequest\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Lead\LookupInputData::class)) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
