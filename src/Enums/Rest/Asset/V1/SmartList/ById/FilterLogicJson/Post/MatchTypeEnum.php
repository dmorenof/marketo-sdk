<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\Asset\V1\SmartList\ById\FilterLogicJson\Post;

enum MatchTypeEnum: string
{
    case All = 'all';
    case Any = 'any';
    case Custom = 'custom';
}
