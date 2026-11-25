<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\LandingPage\Content\Response;

enum FollowupTypeEnum: string
{
    case FormDefined = 'formDefined';
    case Lp = 'lp';
    case Url = 'url';
}
