<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\Asset\V1\LandingPageTemplate\ById\ContentJson\Get\Query;

enum QueryStatusEnum: string
{
    case Approved = 'approved';
    case Draft = 'draft';
}
