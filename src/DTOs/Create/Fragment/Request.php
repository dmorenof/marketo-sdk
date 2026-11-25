<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Create\Fragment;

/**
 * CreateFragmentRequest
 *
 * Request body for creating a fragment. appData must include at least one of: folderId or workspaceId. settings must include fragmentType and supportedChannels.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'appData',
    'name',
    'settings',
];

    public \MarketoSDK\DTOs\AppDataDTO $appData;
    public \MarketoSDK\DTOs\DataDTO $data;
    public string $description;
    public \MarketoSDK\DTOs\EditorContextDto $editorContext;
    public string $name;
    public \MarketoSDK\DTOs\Fragment\SettingsDTO $settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appData' => $value instanceof \stdClass ? $this->appData = new \MarketoSDK\DTOs\AppDataDTO($value) : parent::assignMember($name, $value),
            'data' => $value instanceof \stdClass ? $this->data = new \MarketoSDK\DTOs\DataDTO($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'editorContext' => $value instanceof \stdClass ? $this->editorContext = new \MarketoSDK\DTOs\EditorContextDto($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \MarketoSDK\DTOs\Fragment\SettingsDTO($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
