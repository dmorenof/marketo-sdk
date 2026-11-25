<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailContentDTO
 */
class ContentDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\Email\AppDataResponseDTO $appData;
    public string $appType;
    public \MarketoSDK\Collections\Email\ContentDTO\AssociatedStatesCollection $associatedStates;
    public string $description;
    public \MarketoSDK\DTOs\EditorContextDto $editorContext;
    public string $externalId;
    public \MarketoSDK\DTOs\Email\HeadersDTO $headers;
    public string $id;
    public \MarketoSDK\DTOs\ContentMetadataDTO $metadata;
    public string $name;
    public string $scriptEngine;
    public \MarketoSDK\DTOs\Email\SettingsResponseDTO $settings;
    public string $state;
    public string $status;
    public string $templateId;
    public string $virtualId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appData' => $value instanceof \stdClass ? $this->appData = new \MarketoSDK\DTOs\Email\AppDataResponseDTO($value) : parent::assignMember($name, $value),
            'appType' => is_string($value) ? $this->appType = $value : parent::assignMember($name, $value),
            'associatedStates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->associatedStates = new \MarketoSDK\Collections\Email\ContentDTO\AssociatedStatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\AssociatedStateDTO::class)) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'editorContext' => $value instanceof \stdClass ? $this->editorContext = new \MarketoSDK\DTOs\EditorContextDto($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'headers' => $value instanceof \stdClass ? $this->headers = new \MarketoSDK\DTOs\Email\HeadersDTO($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'metadata' => $value instanceof \stdClass ? $this->metadata = new \MarketoSDK\DTOs\ContentMetadataDTO($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scriptEngine' => is_string($value) ? $this->scriptEngine = $value : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \MarketoSDK\DTOs\Email\SettingsResponseDTO($value) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'virtualId' => is_string($value) ? $this->virtualId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
