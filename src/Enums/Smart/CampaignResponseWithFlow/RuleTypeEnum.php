<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Smart\CampaignResponseWithFlow;

enum RuleTypeEnum: string
{
    case Any = 'any';
    case Interval = 'interval';
    case Once = 'once';
}
