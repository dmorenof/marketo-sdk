<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Flow steps of a smart campaign
 */
final class Flow extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\Collections\Flow\StepsCollection $steps;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'steps' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->steps = new \MarketoSDK\Collections\Flow\StepsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\FlowStep::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
