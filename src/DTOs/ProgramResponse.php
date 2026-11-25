<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class ProgramResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
        'costs',
        'folder',
        'status',
        'tags',
        'type',
    ];

    /**
     * Channel of the program
     */
    public string $channel;
    /**
     * Lists of associated period costs
     */
    public \MarketoSDK\Collections\ProgramResponse\CostsCollection $costs;
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
     * End date of the program. Applicable to event, email, and webinar type programs
     * Format: date-time
     */
    public string $endDate;
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
     * Start date of program. Applicable to event, email and webinar type programs
     * Format: date-time
     */
    public string $startDate;
    /**
     * Status of the program. Only valid for Email and engagement program types.
     */
    public \MarketoSDK\Enums\ProgramResponse\StatusEnum $status;
    /**
     * List of associated program tags
     */
    public \MarketoSDK\Collections\ProgramResponse\TagsCollection $tags;
    /**
     * Type of the program
     */
    public \MarketoSDK\Enums\ProgramResponse\TypeEnum $type;
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
            'costs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->costs = new \MarketoSDK\Collections\ProgramResponse\CostsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Costs::class)) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'endDate' => is_string($value) ? $this->endDate = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sfdcId' => is_string($value) ? $this->sfdcId = $value : parent::assignMember($name, $value),
            'sfdcName' => is_string($value) ? $this->sfdcName = $value : parent::assignMember($name, $value),
            'startDate' => is_string($value) ? $this->startDate = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\ProgramResponse\StatusEnum::from($value) : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tags = new \MarketoSDK\Collections\ProgramResponse\TagsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Tags::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\ProgramResponse\TypeEnum::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
