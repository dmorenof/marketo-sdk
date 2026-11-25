<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Bulk\V1\LeadsJson\Post\Query;

enum QueryFormatEnum: string
{
    case Csv = 'csv';
    case Ssv = 'ssv';
    case Tsv = 'tsv';
}
