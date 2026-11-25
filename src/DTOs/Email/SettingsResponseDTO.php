<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailSettingsResponseDTO
 */
final class SettingsResponseDTO extends \Dmorenof\SdkRuntime\DTO
{
    public bool $disableOpenTracking;
    public bool $enableUrlTracking;
    public bool $isOperational;
    public bool $isTextOnly;
    public bool $isWebPageView;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disableOpenTracking' => is_bool($value) ? $this->disableOpenTracking = $value : parent::assignMember($name, $value),
            'enableUrlTracking' => is_bool($value) ? $this->enableUrlTracking = $value : parent::assignMember($name, $value),
            'isOperational' => is_bool($value) ? $this->isOperational = $value : parent::assignMember($name, $value),
            'isTextOnly' => is_bool($value) ? $this->isTextOnly = $value : parent::assignMember($name, $value),
            'isWebPageView' => is_bool($value) ? $this->isWebPageView = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
