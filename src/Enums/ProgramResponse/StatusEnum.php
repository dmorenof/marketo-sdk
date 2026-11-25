<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\ProgramResponse;

enum StatusEnum: string
{
    case Locked = 'locked';
    case Off = 'off';
    case On = 'on';
    case Unlocked = 'unlocked';
}
