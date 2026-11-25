<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * StateTransitionRequest
 */
final class StateTransitionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'contentId',
    ];

    /**
     * The state transition action to perform on the asset
     */
    public \MarketoSDK\Enums\StateTransitionRequest\ActionEnum $action;
    public string $contentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \MarketoSDK\Enums\StateTransitionRequest\ActionEnum::from($value) : parent::assignMember($name, $value),
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
