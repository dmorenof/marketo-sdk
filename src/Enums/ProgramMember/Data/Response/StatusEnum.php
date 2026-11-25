<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\ProgramMember\Data\Response;

enum StatusEnum: string
{
    case Created = 'created';
    case Skipped = 'skipped';
    case Updated = 'updated';
}
