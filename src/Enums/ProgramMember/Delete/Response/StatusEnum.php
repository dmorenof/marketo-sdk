<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\ProgramMember\Delete\Response;

enum StatusEnum: string
{
    case Deleted = 'deleted';
    case Skipped = 'skipped';
}
