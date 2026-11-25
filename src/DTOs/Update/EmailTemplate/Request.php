<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Update\EmailTemplate;

/**
 * UpdateEmailTemplateRequest
 *
 * Request body for updating an email template.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\DataDTO $data;
    public string $description;
    public \MarketoSDK\DTOs\EditorContextDto $editorContext;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => $value instanceof \stdClass ? $this->data = new \MarketoSDK\DTOs\DataDTO($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'editorContext' => $value instanceof \stdClass ? $this->editorContext = new \MarketoSDK\DTOs\EditorContextDto($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
