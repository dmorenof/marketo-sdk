<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Smart\Campaign\Response;

enum RuleTypeEnum: string
{
    case Any = 'any';
    case Interval = 'interval';
    case Once = 'once';
}
