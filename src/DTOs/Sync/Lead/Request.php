<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Sync\Lead;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'input',
];

    /**
     * Type of sync operation to perform. Defaults to createOrUpdate if unset
     */
    public \MarketoSDK\Enums\Sync\Lead\Request\ActionEnum $action;
    /**
     * If set to true, the call will return immediately
     * Example: false
     */
    public bool $asyncProcessing;
    /**
     * List of leads for input
     */
    public \MarketoSDK\Collections\ResponseOf\Lead\ResultCollection $input;
    /**
     * Field to deduplicate on. The field must be present in each lead record of the input. Defaults to email if unset
     */
    public string $lookupField;
    /**
     * Name of the partition to operate on, if applicable. Should be set whenever possible, when interacting with an instance where partitions are enabled.
     */
    public string $partitionName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \MarketoSDK\Enums\Sync\Lead\Request\ActionEnum::from($value) : parent::assignMember($name, $value),
            'asyncProcessing' => is_bool($value) ? $this->asyncProcessing = $value : parent::assignMember($name, $value),
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\ResponseOf\Lead\ResultCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Lead::class)) : parent::assignMember($name, $value),
            'lookupField' => is_string($value) ? $this->lookupField = $value : parent::assignMember($name, $value),
            'partitionName' => is_string($value) ? $this->partitionName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
