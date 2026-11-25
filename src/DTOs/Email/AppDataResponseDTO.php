<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailAppDataResponseDTO
 *
 * Location and program context of the email. Program fields are only present when the email lives under a program.
 */
final class AppDataResponseDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $editorType;
    public string $folderId;
    public string $programId;
    public string $programName;
    public string $programType;
    public string $workspaceId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'editorType' => is_string($value) ? $this->editorType = $value : parent::assignMember($name, $value),
            'folderId' => is_string($value) ? $this->folderId = $value : parent::assignMember($name, $value),
            'programId' => is_string($value) ? $this->programId = $value : parent::assignMember($name, $value),
            'programName' => is_string($value) ? $this->programName = $value : parent::assignMember($name, $value),
            'programType' => is_string($value) ? $this->programType = $value : parent::assignMember($name, $value),
            'workspaceId' => is_string($value) ? $this->workspaceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
