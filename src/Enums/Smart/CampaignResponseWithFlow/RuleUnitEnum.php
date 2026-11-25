<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Smart\CampaignResponseWithFlow;

enum RuleUnitEnum: string
{
    case Day = 'day';
    case Hour = 'hour';
    case Month = 'month';
    case Week = 'week';
}
