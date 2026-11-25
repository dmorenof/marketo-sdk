<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\Email;

/**
 * UpdateEmailRequest
 *
 * Request body for updating an email.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\DataDTO $data;
    public string $description;
    public \MarketoSDK\DTOs\EditorContextDto $editorContext;
    public \MarketoSDK\DTOs\Update\EmailHeadersDTO $headers;
    public string $name;
    public \MarketoSDK\DTOs\Email\SettingsDTO $settings;
    /**
     * When provided, the template's content overwrites both the email's existing content and any data sent in the request.
     */
    public string $templateId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \MarketoSDK\DTOs\DataDTO($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'editorContext' => $value instanceof \stdClass ? $this->editorContext = new \MarketoSDK\DTOs\EditorContextDto($value) : parent::assignMember($name, $value),
            'headers' => $value instanceof \stdClass ? $this->headers = new \MarketoSDK\DTOs\Update\EmailHeadersDTO($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \MarketoSDK\DTOs\Email\SettingsDTO($value) : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
