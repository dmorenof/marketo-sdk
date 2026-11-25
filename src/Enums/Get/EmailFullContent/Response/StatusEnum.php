<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Get\EmailFullContent\Response;

enum StatusEnum: string
{
    case Approved = 'approved';
    case Draft = 'draft';
}
