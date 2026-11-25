<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Sync\CustomObjectType;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiName',
    'displayName',
];

    /**
     * Type of sync operation to perform. Default is createOrUpdate.
     */
    public \MarketoSDK\Enums\Sync\CustomObjectType\Request\ActionEnum $action;
    /**
     * API name of the custom object type
     */
    public string $apiName;
    /**
     * Description of the custom object type
     */
    public string $description;
    /**
     * UI display-name of the custom object type
     */
    public string $displayName;
    /**
     * UI plural-name of the custom object type
     */
    public string $pluralName;
    /**
     * Whether to show custom object type in lead detail of UI. Default is false
     */
    public bool $showInLeadDetail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \MarketoSDK\Enums\Sync\CustomObjectType\Request\ActionEnum::from($value) : parent::assignMember($name, $value),
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'pluralName' => is_string($value) ? $this->pluralName = $value : parent::assignMember($name, $value),
            'showInLeadDetail' => is_bool($value) ? $this->showInLeadDetail = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
