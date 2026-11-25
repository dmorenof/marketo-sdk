<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\BrowseAllPrograms;

enum TypeEnum: string
{
    case Event = 'event';
    case Nurture = 'nurture';
    case Program = 'program';
    case Webinar = 'webinar';
}
