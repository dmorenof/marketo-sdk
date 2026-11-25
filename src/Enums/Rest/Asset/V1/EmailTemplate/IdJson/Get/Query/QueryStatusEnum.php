<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\Asset\V1\EmailTemplate\IdJson\Get\Query;

enum QueryStatusEnum: string
{
    case Approved = 'approved';
    case Draft = 'draft';
}
