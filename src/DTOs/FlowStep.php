<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class FlowStep extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'activityTypeId',
    'activityTypeName',
    'id',
];

    protected const array VALIDATION = [
    'activityTypeId' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
];

    /**
     * Id of the flow step action type
     * Format: int32
     */
    public int $activityTypeId {
        set {
            $this->assigning('activityTypeId', $value);
            $this->activityTypeId = $value;
        }
    }
    /**
     * Name of the flow step action type
     */
    public string $activityTypeName;
    /**
     * Id of the flow step, used in flow step mutation endpoints
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \MarketoSDK\Collections\FlowStep\StepChoiceCollection $stepChoice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityTypeId' => is_int($value) ? $this->activityTypeId = $value : parent::assignMember($name, $value),
            'activityTypeName' => is_string($value) ? $this->activityTypeName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'stepChoice' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->stepChoice = new \MarketoSDK\Collections\FlowStep\StepChoiceCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\FlowStepChoice::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
