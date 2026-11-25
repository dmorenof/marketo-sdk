<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\ProgramMember\Status\Response;

enum StatusEnum: string
{
    case Skipped = 'skipped';
    case Updated = 'updated';
}
