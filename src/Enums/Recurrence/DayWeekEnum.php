<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Recurrence;

enum DayWeekEnum: string
{
    case Friday = 'Friday';
    case Monday = 'Monday';
    case Saturday = 'Saturday';
    case Sunday = 'Sunday';
    case Thursday = 'Thursday';
    case Tuesday = 'Tuesday';
    case Wednesday = 'Wednesday';
}
