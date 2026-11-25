<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ChannelResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'applicableProgramType',
    'createdAt',
    'id',
    'name',
    'updatedAt',
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Types of programs to which the channel can apply
     */
    public string $applicableProgramType;
    /**
     * Datetime when the channel was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Id of the Channel
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Name of the Channel
     */
    public string $name;
    /**
     * List of available statuses for members of programs with the channel
     */
    public \MarketoSDK\Collections\ChannelResponse\ProgressionStatusesCollection $progressionStatuses;
    /**
     * Datetime when the channel was most recently updated
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicableProgramType' => is_string($value) ? $this->applicableProgramType = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'progressionStatuses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->progressionStatuses = new \MarketoSDK\Collections\ChannelResponse\ProgressionStatusesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\ChannelProgression::class)) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
