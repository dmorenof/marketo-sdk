<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Smart\ListRules;

enum MatchTypeEnum: string
{
    case All = 'all';
    case Any = 'any';
    case Custom = 'custom';
}
