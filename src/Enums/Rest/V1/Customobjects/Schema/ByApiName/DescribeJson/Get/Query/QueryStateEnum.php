<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\V1\Customobjects\Schema\ByApiName\DescribeJson\Get\Query;

enum QueryStateEnum: string
{
    case Approved = 'approved';
    case ApprovedWithDraft = 'approvedWithDraft';
    case Draft = 'draft';
}
