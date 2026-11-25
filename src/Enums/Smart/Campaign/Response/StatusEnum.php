<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Smart\Campaign\Response;

enum StatusEnum: string
{
    case Active = 'Active';
    case Inactive = 'Inactive';
    case Invalid = 'Invalid';
    case NeverRun = 'Never Run';
    case RecurringRun = 'Recurring Run';
    case Requested = 'Requested';
    case SingleRun = 'Single Run';
}
