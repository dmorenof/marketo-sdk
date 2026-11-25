<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Bulk\V1\Customobjects\ByApiName\ImportJson\Post\Query;

enum QueryFormatEnum: string
{
    case Csv = 'csv';
    case Ssv = 'ssv';
    case Tsv = 'tsv';
}
