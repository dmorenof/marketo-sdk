<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Sync\NamedAccountList\Request;

enum ActionEnum: string
{
    case CreateOnly = 'createOnly';
    case UpdateOnly = 'updateOnly';
}
