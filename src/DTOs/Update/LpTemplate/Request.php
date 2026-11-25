<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\LpTemplate;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the landing page template
     */
    public string $description;
    /**
     * Whether to enable munchkin on the derived pages. Defaults to true
     */
    public bool $enableMunchkin;
    /**
     * Name of the landing page template
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'enableMunchkin' => is_bool($value) ? $this->enableMunchkin = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
