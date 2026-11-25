<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailSettingsDTO
 */
final class SettingsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $brandedDomain;
    public string $dedicatedIp;
    public bool $enableUrlTracking;
    public bool $isOperational;
    public bool $isTextOnly;
    public bool $isWebPageView;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandedDomain' => is_string($value) ? $this->brandedDomain = $value : parent::assignMember($name, $value),
            'dedicatedIp' => is_string($value) ? $this->dedicatedIp = $value : parent::assignMember($name, $value),
            'enableUrlTracking' => is_bool($value) ? $this->enableUrlTracking = $value : parent::assignMember($name, $value),
            'isOperational' => is_bool($value) ? $this->isOperational = $value : parent::assignMember($name, $value),
            'isTextOnly' => is_bool($value) ? $this->isTextOnly = $value : parent::assignMember($name, $value),
            'isWebPageView' => is_bool($value) ? $this->isWebPageView = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
