<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\Snippet;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the snippet
     */
    public string $description;
    /**
     * Archival status of the snippet
     */
    public string $isArchive;
    /**
     * Name of the snippet
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'isArchive' => is_string($value) ? $this->isArchive = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
