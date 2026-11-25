<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Lead;

final class Change extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'activityDate',
        'activityTypeId',
        'attributes',
        'id',
        'leadId',
    ];

    protected const array VALIDATION = [
        'activityTypeId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Datetime of the activity
     * Format: date-time
     */
    public string $activityDate;
    /**
     * Id of the activity type
     * Format: int32
     */
    public int $activityTypeId {
        set {
            $this->assigning('activityTypeId', $value);
            $this->activityTypeId = $value;
        }
    }
    /**
     * List of secondary attributes
     */
    public \MarketoSDK\Collections\Activity\AttributesCollection $attributes;
    /**
     * Format: int64
     */
    public int $campaignId;
    public \MarketoSDK\Collections\Lead\Change\FieldsCollection $fields;
    /**
     * Integer id of the activity. For instances which have been migrated to Activity Service, this field may not be present, and should not be treated as unique.
     * Format: int64
     */
    public int $id;
    /**
     * Id of the lead associated to the activity
     * Format: int64
     */
    public int $leadId;
    /**
     * Unique id of the activity (128 character string)
     */
    public string $marketoGUID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityDate' => is_string($value) ? $this->activityDate = $value : parent::assignMember($name, $value),
            'activityTypeId' => is_int($value) ? $this->activityTypeId = $value : parent::assignMember($name, $value),
            'attributes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attributes = new \MarketoSDK\Collections\Activity\AttributesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Attribute::class)) : parent::assignMember($name, $value),
            'campaignId' => is_int($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->fields = new \MarketoSDK\Collections\Lead\Change\FieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Lead\ChangeField::class)) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'leadId' => is_int($value) ? $this->leadId = $value : parent::assignMember($name, $value),
            'marketoGUID' => is_string($value) ? $this->marketoGUID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
