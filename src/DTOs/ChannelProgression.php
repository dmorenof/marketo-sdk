<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ChannelProgression extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'step' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Description of the program status
     */
    public string $description;
    /**
     * Whether the status has been hidden
     */
    public bool $hidden;
    /**
     * Name of the status
     */
    public string $name;
    /**
     * Step number of the status
     * Format: int32
     */
    public int $step {
        set {
            $this->assigning('step', $value);
            $this->step = $value;
        }
    }
    /**
     * Whether this status is a success step for program members
     */
    public bool $success;
    /**
     * Type of the status
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'hidden' => is_bool($value) ? $this->hidden = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'step' => is_int($value) ? $this->step = $value : parent::assignMember($name, $value),
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
