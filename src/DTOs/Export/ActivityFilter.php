<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Export;

final class ActivityFilter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
];

    /**
     * List of activity type ids to filter on
     */
    public \MarketoSDK\Collections\Export\ActivityFilter\TypeIdsCollection $activityTypeIds;
    /**
     * Date range to filter new activities on
     */
    public \MarketoSDK\DTOs\DateRange $createdAt;
    /**
     * List of primary attribute ids to filter on
     */
    public \MarketoSDK\Collections\Export\ActivityFilter\TypeIdsCollection $primaryAttributeValueIds;
    /**
     * List of primary attribute values to filter on
     */
    public \MarketoSDK\Collections\StringCollection $primaryAttributeValues;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityTypeIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->activityTypeIds = new \MarketoSDK\Collections\Export\ActivityFilter\TypeIdsCollection($value) : parent::assignMember($name, $value),
            'createdAt' => $value instanceof \stdClass ? $this->createdAt = new \MarketoSDK\DTOs\DateRange($value) : parent::assignMember($name, $value),
            'primaryAttributeValueIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->primaryAttributeValueIds = new \MarketoSDK\Collections\Export\ActivityFilter\TypeIdsCollection($value) : parent::assignMember($name, $value),
            'primaryAttributeValues' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->primaryAttributeValues = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
