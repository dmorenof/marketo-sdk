<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * AppDataDTO
 */
final class AppDataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $editorType;
    public string $folderId;
    public string $workspaceId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'editorType' => is_string($value) ? $this->editorType = $value : parent::assignMember($name, $value),
            'folderId' => is_string($value) ? $this->folderId = $value : parent::assignMember($name, $value),
            'workspaceId' => is_string($value) ? $this->workspaceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
