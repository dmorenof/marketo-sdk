<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class BrowseAllPrograms extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
        'folder',
        'status',
        'type',
    ];

    /**
     * Channel of the program
     */
    public string $channel;
    /**
     * Datetime the asset was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the asset
     */
    public string $description;
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Id of the asset
     * Format: int64
     */
    public int $id;
    /**
     * Name of the asset
     */
    public string $name;
    /**
     * SFDC id of the program if linked to an SFDC campaign
     */
    public string $sfdcId;
    /**
     * Name of the linked SFDC campaign if applicable
     */
    public string $sfdcName;
    /**
     * Status of the program. Only valid for Email and engagement program types.
     */
    public \MarketoSDK\Enums\BrowseAllPrograms\StatusEnum $status;
    /**
     * Type of the program
     */
    public \MarketoSDK\Enums\BrowseAllPrograms\TypeEnum $type;
    /**
     * Datetime the asset was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Url of the asset in the Marketo UI
     */
    public string $url;
    /**
     * Name of the workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sfdcId' => is_string($value) ? $this->sfdcId = $value : parent::assignMember($name, $value),
            'sfdcName' => is_string($value) ? $this->sfdcName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\BrowseAllPrograms\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\BrowseAllPrograms\TypeEnum::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
