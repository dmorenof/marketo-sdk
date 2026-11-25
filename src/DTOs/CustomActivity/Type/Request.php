<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\CustomActivity\Type;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiName',
    'filterName',
    'name',
    'primaryAttribute',
    'triggerName',
];

    public string $apiName;
    public string $description;
    /**
     * Human-readable name of the associated filter
     */
    public string $filterName;
    /**
     * Human-readable display name of the activity type
     */
    public string $name;
    /**
     * Primary attribute of the activity type
     */
    public \MarketoSDK\DTOs\CustomActivity\TypeAttribute $primaryAttribute;
    /**
     * Human-readable name of the associated trigger
     */
    public string $triggerName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apiName' => is_string($value) ? $this->apiName = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'filterName' => is_string($value) ? $this->filterName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'primaryAttribute' => $value instanceof \stdClass ? $this->primaryAttribute = new \MarketoSDK\DTOs\CustomActivity\TypeAttribute($value) : parent::assignMember($name, $value),
            'triggerName' => is_string($value) ? $this->triggerName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
