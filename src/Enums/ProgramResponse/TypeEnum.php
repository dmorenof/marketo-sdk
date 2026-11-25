<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\ProgramResponse;

enum TypeEnum: string
{
    case Default_ = 'default';
    case Event = 'event';
    case Nurture = 'nurture';
    case Webinar = 'webinar';
}
