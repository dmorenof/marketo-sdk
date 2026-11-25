<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Sync\Lead\Request;

enum ActionEnum: string
{
    case CreateDuplicate = 'createDuplicate';
    case CreateOnly = 'createOnly';
    case CreateOrUpdate = 'createOrUpdate';
    case UpdateOnly = 'updateOnly';
}
