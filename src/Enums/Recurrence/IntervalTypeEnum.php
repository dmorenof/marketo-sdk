<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Recurrence;

enum IntervalTypeEnum: string
{
    case Daily = 'Daily';
    case Monthly = 'Monthly';
    case Weekly = 'Weekly';
}
