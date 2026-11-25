<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\Asset\V1\Email\ById\FullContentJson\Get\Query;

enum QueryTypeEnum: string
{
    case HTML = 'HTML';
    case Text = 'Text';
}
