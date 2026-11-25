<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class NamedAccountList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'marketoGUID',
    'seq',
];

    protected const array VALIDATION = [
    'seq' => [
        'format' => 'int32',
    ],
];

    /**
     * Datetime when the named account list was created
     */
    public string $createdAt;
    /**
     * Unique GUID of the custom object records
     */
    public string $marketoGUID;
    /**
     * Name of named account list
     */
    public string $name;
    /**
     * List of reasons why an operation did not succeed. Reasons are only present in API responses and should not be submitted
     */
    public \MarketoSDK\Collections\ChangeLeadProgramStatusOutputData\ReasonsCollection $reasons;
    /**
     * Integer indicating the sequence of the record in response. This value is correlated to the order of the records included in the request input. Seq should only be part of responses and should not be submitted.
     * Format: int32
     */
    public int $seq {
        set {
            $this->assigning('seq', $value);
            $this->seq = $value;
        }
    }
    public \MarketoSDK\Enums\NamedAccountList\StatusEnum $status;
    /**
     * Type of named account list ("default" if created by user or API, "external" if managed by CRM-View)
     */
    public string $type;
    /**
     * Whether the list is updateable (true if created by user or API, false if managed by CRM-View)
     * Example: false
     */
    public bool $updateable;
    /**
     * Datetime when the named account list was most recently updated
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'marketoGUID' => is_string($value) ? $this->marketoGUID = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'reasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->reasons = new \MarketoSDK\Collections\ChangeLeadProgramStatusOutputData\ReasonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Reason::class)) : parent::assignMember($name, $value),
            'seq' => is_int($value) ? $this->seq = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\NamedAccountList\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'updateable' => is_bool($value) ? $this->updateable = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
