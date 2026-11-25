<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ReArrangeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\Collections\ReArrangeRequest\PositionsCollection $positions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'positions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->positions = new \MarketoSDK\Collections\ReArrangeRequest\PositionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Update\FieldPosition::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
