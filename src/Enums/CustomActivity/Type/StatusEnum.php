<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\CustomActivity\Type;

enum StatusEnum: string
{
    case ApprovedWithDraft = 'approved with draft';
    case Approved = 'approved';
    case Deleted = 'deleted';
    case Draft = 'draft';
}
