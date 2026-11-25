<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Bulk\V1\Program\ByProgramId\Members\ImportJson\Post\Query;

enum QueryFormatEnum: string
{
    case CSV = 'CSV';
    case SSV = 'SSV';
    case TSV = 'TSV';
}
