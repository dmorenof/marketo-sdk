<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * AssociatedStateDTO
 *
 * A version/state of the asset (e.g. draft or approved).
 */
final class AssociatedStateDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $contentId;
    public string $externalId;
    public string $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
