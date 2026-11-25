<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

/**
 * EmailTemplateContentDTO
 */
class TemplateContentDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'version' => [
        'format' => 'int32',
    ],
];

    public \MarketoSDK\DTOs\AppDataDTO $appData;
    public string $appType;
    public \MarketoSDK\Collections\Email\ContentDTO\AssociatedStatesCollection $associatedStates;
    public string $description;
    public string $externalId;
    public string $id;
    public \MarketoSDK\DTOs\ContentMetadataDTO $metadata;
    public string $name;
    public string $scriptEngine;
    public string $state;
    public string $status;
    /**
     * Format: int32
     */
    public int $version {
        set {
            $this->assigning('version', $value);
            $this->version = $value;
        }
    }
    public string $virtualId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appData' => $value instanceof \stdClass ? $this->appData = new \MarketoSDK\DTOs\AppDataDTO($value) : parent::assignMember($name, $value),
            'appType' => is_string($value) ? $this->appType = $value : parent::assignMember($name, $value),
            'associatedStates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->associatedStates = new \MarketoSDK\Collections\Email\ContentDTO\AssociatedStatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\AssociatedStateDTO::class)) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'metadata' => $value instanceof \stdClass ? $this->metadata = new \MarketoSDK\DTOs\ContentMetadataDTO($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scriptEngine' => is_string($value) ? $this->scriptEngine = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'version' => is_int($value) ? $this->version = $value : parent::assignMember($name, $value),
            'virtualId' => is_string($value) ? $this->virtualId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
