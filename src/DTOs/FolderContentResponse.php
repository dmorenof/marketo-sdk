<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class FolderContentResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: int64
     */
    public int $id;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
