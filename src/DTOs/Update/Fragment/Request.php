<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\Fragment;

/**
 * UpdateFragmentRequest
 *
 * Request body for updating a fragment.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\DataDTO $data;
    public string $description;
    public \MarketoSDK\DTOs\EditorContextDto $editorContext;
    public string $name;
    public \MarketoSDK\DTOs\Update\FragmentSettingsDTO $settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \MarketoSDK\DTOs\DataDTO($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'editorContext' => $value instanceof \stdClass ? $this->editorContext = new \MarketoSDK\DTOs\EditorContextDto($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \MarketoSDK\DTOs\Update\FragmentSettingsDTO($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
