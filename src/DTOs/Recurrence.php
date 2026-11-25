<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class Recurrence extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'dayOfMonth',
        'dayOfWeek',
        'endAt',
        'interval',
        'intervalType',
        'startAt',
        'weekOfMonth',
        'weekdayMask',
        'weekdayOnly',
    ];

    protected const array VALIDATION = [
        'dayOfMonth' => [
            'format' => 'int32',
        ],
        'interval' => [
            'format' => 'int32',
        ],
        'weekOfMonth' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Day of the month to recur. Permissible range 1-31. May only be set if intervalType is 'Monthly' and dayOfWeek and weekOfMonth are unset.
     * Format: int32
     */
    public int $dayOfMonth {
        set {
            $this->assigning('dayOfMonth', $value);
            $this->dayOfMonth = $value;
        }
    }
    /**
     * Day of the week to recur. May only be set if dayOfMonth is not set, and weekOfMonth is set
     * Format: int32
     */
    public \MarketoSDK\Enums\Recurrence\DayWeekEnum $dayOfWeek;
    /**
     * Datetime after which no further runs will be automatically scheduled
     * Format: date-time
     */
    public string $endAt;
    /**
     * Number of interval units between recurrences
     * Format: int32
     */
    public int $interval {
        set {
            $this->assigning('interval', $value);
            $this->interval = $value;
        }
    }
    /**
     * Recurrence interval. Not required to create a smart campaign that has no recurrence
     */
    public \MarketoSDK\Enums\Recurrence\IntervalTypeEnum $intervalType;
    /**
     * Datetime of the first scheduled campaign to run. Required if setting recurrence. Not required to create a smart campaign that has no recurrence
     * Format: date-time
     */
    public string $startAt;
    /**
     * Week of the month to recur. Permissible range 1-4. May only be set if dayOfMonth is not set, and dayOfWeek is set
     * Format: int32
     */
    public int $weekOfMonth {
        set {
            $this->assigning('weekOfMonth', $value);
            $this->weekOfMonth = $value;
        }
    }
    /**
     * String array of empty or one or more of 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'. May only be set if intervalType is 'Weekly'
     */
    public \MarketoSDK\Collections\StringCollection $weekdayMask;
    /**
     * Only run smart campaign on weekdays. May only be set if intervalType is 'Daily'. Defaults to false
     */
    public bool $weekdayOnly;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dayOfMonth' => is_int($value) ? $this->dayOfMonth = $value : parent::assignMember($name, $value),
            'dayOfWeek' => is_string($value) ? $this->dayOfWeek = \MarketoSDK\Enums\Recurrence\DayWeekEnum::from($value) : parent::assignMember($name, $value),
            'endAt' => is_string($value) ? $this->endAt = $value : parent::assignMember($name, $value),
            'interval' => is_int($value) ? $this->interval = $value : parent::assignMember($name, $value),
            'intervalType' => is_string($value) ? $this->intervalType = \MarketoSDK\Enums\Recurrence\IntervalTypeEnum::from($value) : parent::assignMember($name, $value),
            'startAt' => is_string($value) ? $this->startAt = $value : parent::assignMember($name, $value),
            'weekOfMonth' => is_int($value) ? $this->weekOfMonth = $value : parent::assignMember($name, $value),
            'weekdayMask' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->weekdayMask = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'weekdayOnly' => is_bool($value) ? $this->weekdayOnly = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
