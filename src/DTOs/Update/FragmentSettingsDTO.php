<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update;

/**
 * UpdateFragmentSettingsDTO
 */
final class FragmentSettingsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $fragmentSubType;
    public string $fragmentType;
    public \MarketoSDK\Collections\StringCollection $supportedChannels;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fragmentSubType' => is_string($value) ? $this->fragmentSubType = $value : parent::assignMember($name, $value),
            'fragmentType' => is_string($value) ? $this->fragmentType = $value : parent::assignMember($name, $value),
            'supportedChannels' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supportedChannels = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
