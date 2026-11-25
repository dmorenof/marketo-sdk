<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\CustomActivity;

enum StatusEnum: string
{
    case Added = 'added';
    case Created = 'created';
    case Deleted = 'deleted';
    case Removed = 'removed';
    case Skipped = 'skipped';
    case Updated = 'updated';
}
