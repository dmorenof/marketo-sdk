<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\ObjectMetaData;

enum StateEnum: string
{
    case Approved = 'approved';
    case ApprovedWithDraft = 'approvedWithDraft';
    case Draft = 'draft';
}
