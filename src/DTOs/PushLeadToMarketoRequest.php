<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class PushLeadToMarketoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\Collections\PushLeadToMarketoRequest\InputCollection $input;
    public string $lookupField;
    public string $partitionName;
    public string $programName;
    public string $programStatus;
    public string $reason;
    public string $source;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\PushLeadToMarketoRequest\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\PushLead::class)) : parent::assignMember($name, $value),
            'lookupField' => is_string($value) ? $this->lookupField = $value : parent::assignMember($name, $value),
            'partitionName' => is_string($value) ? $this->partitionName = $value : parent::assignMember($name, $value),
            'programName' => is_string($value) ? $this->programName = $value : parent::assignMember($name, $value),
            'programStatus' => is_string($value) ? $this->programStatus = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
