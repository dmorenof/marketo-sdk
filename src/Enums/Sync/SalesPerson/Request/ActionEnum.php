<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Sync\SalesPerson\Request;

enum ActionEnum: string
{
    case CreateOnly = 'createOnly';
    case CreateOrUpdate = 'createOrUpdate';
    case UpdateOnly = 'updateOnly';
}
