<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * ContentWaveErrorDTO
 *
 * An entry in the errors array. The type field marks it as info, warning, or error — there is no separate warnings array; warnings appear here with type "warning".
 */
final class ContentWaveErrorDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $code;
    public string $dynamicMessage;
    public string $errorMessage;
    /**
     * Location in the content the entry refers to (for script/validation errors).
     */
    public \MarketoSDK\DTOs\ContentWaveErrorDTO\ErrorPositionDTO $errorPosition;
    public string $key;
    public string $message;
    /**
     * Origin of the entry, e.g. validation, template, fragment, message_render, asset_publish.
     */
    public string $source;
    /**
     * Severity of the entry: info, warning, or error.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'dynamicMessage' => is_string($value) ? $this->dynamicMessage = $value : parent::assignMember($name, $value),
            'errorMessage' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
