<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Smart\Campaign;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'description',
    'flowId',
    'folder',
    'id',
    'isActive',
    'isCommunicationLimitEnabled',
    'isRequestable',
    'isSystem',
    'maxMembers',
    'name',
    'qualificationRuleInterval',
    'qualificationRuleType',
    'qualificationRuleUnit',
    'recurrence',
    'smartListId',
    'status',
    'type',
    'updatedAt',
    'workspace',
];

    protected const array VALIDATION = [
    'flowId' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
    'maxMembers' => [
        'format' => 'int32',
    ],
    'parentProgramId' => [
        'format' => 'int32',
    ],
    'smartListId' => [
        'format' => 'int32',
    ],
];

    /**
     * URL to asset in Marketo Engage
     */
    public string $computedUrl;
    /**
     * Datetime when the smart campaign was created
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Description of the smart campaign
     */
    public string $description;
    /**
     * Id of the smart campaign's child flow
     * Format: int32
     */
    public int $flowId {
        set {
            $this->assigning('flowId', $value);
            $this->flowId = $value;
        }
    }
    /**
     * JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     */
    public \MarketoSDK\DTOs\Folder $folder;
    /**
     * Id of the smart campaign (system managed)
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Whether smart campaign is active. Defaults to false
     */
    public bool $isActive;
    /**
     * Whether smart campaign communication limit is enabled (i.e. block non-operational emails). Defaults to false
     */
    public bool $isCommunicationLimitEnabled;
    /**
     * Whether smart campaign is requestable (is active and contains 'Campaign is Requested' trigger with Source of 'Web Service API'). Defaults to false
     */
    public bool $isRequestable;
    /**
     * Whether smart campaign is system managed. Defaults to false
     */
    public bool $isSystem;
    /**
     * Smart campaign membership limit
     * Format: int32
     */
    public int $maxMembers {
        set {
            $this->assigning('maxMembers', $value);
            $this->maxMembers = $value;
        }
    }
    /**
     * Name of the smart campaign
     */
    public string $name;
    /**
     * Parent program Id. Present if smart campaign is under program or nested folder
     * Format: int32
     */
    public int $parentProgramId {
        set {
            $this->assigning('parentProgramId', $value);
            $this->parentProgramId = $value;
        }
    }
    /**
     * Interval of qualification rule. Only set when qualificationRuleType is 'interval'
     */
    public int $qualificationRuleInterval;
    /**
     * Type of qualification rule. Defaults to 'once'
     */
    public \MarketoSDK\Enums\Smart\Campaign\Response\RuleTypeEnum $qualificationRuleType;
    /**
     * Unit of measure of qualification rule. Only set when qualificationRuleType is 'interval'
     */
    public \MarketoSDK\Enums\Smart\Campaign\Response\RuleUnitEnum $qualificationRuleUnit;
    /**
     * Recurrence schedule of batch smart campaign
     */
    public \MarketoSDK\DTOs\Recurrence $recurrence;
    /**
     * Id of the smart campaign's child smart list
     * Format: int32
     */
    public int $smartListId {
        set {
            $this->assigning('smartListId', $value);
            $this->smartListId = $value;
        }
    }
    /**
     * Status of smart campaign
     */
    public \MarketoSDK\Enums\Smart\Campaign\Response\StatusEnum $status;
    /**
     * Type of the smart campaign. Batch: has at least one filter and no triggers. Trigger: has at least one trigger. Default: has no smart list rules
     */
    public \MarketoSDK\Enums\Smart\Campaign\Response\TypeEnum $type;
    /**
     * Datetime when the smart campaign was most recently updated
     * Format: date-time
     */
    public string $updatedAt;
    /**
     * Name of the smart campaign workspace
     */
    public string $workspace;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'computedUrl' => is_string($value) ? $this->computedUrl = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'flowId' => is_int($value) ? $this->flowId = $value : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \MarketoSDK\DTOs\Folder($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isActive' => is_bool($value) ? $this->isActive = $value : parent::assignMember($name, $value),
            'isCommunicationLimitEnabled' => is_bool($value) ? $this->isCommunicationLimitEnabled = $value : parent::assignMember($name, $value),
            'isRequestable' => is_bool($value) ? $this->isRequestable = $value : parent::assignMember($name, $value),
            'isSystem' => is_bool($value) ? $this->isSystem = $value : parent::assignMember($name, $value),
            'maxMembers' => is_int($value) ? $this->maxMembers = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parentProgramId' => is_int($value) ? $this->parentProgramId = $value : parent::assignMember($name, $value),
            'qualificationRuleInterval' => is_int($value) ? $this->qualificationRuleInterval = $value : parent::assignMember($name, $value),
            'qualificationRuleType' => is_string($value) ? $this->qualificationRuleType = \MarketoSDK\Enums\Smart\Campaign\Response\RuleTypeEnum::from($value) : parent::assignMember($name, $value),
            'qualificationRuleUnit' => is_string($value) ? $this->qualificationRuleUnit = \MarketoSDK\Enums\Smart\Campaign\Response\RuleUnitEnum::from($value) : parent::assignMember($name, $value),
            'recurrence' => $value instanceof \stdClass ? $this->recurrence = new \MarketoSDK\DTOs\Recurrence($value) : parent::assignMember($name, $value),
            'smartListId' => is_int($value) ? $this->smartListId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \MarketoSDK\Enums\Smart\Campaign\Response\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Smart\Campaign\Response\TypeEnum::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            'workspace' => is_string($value) ? $this->workspace = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
