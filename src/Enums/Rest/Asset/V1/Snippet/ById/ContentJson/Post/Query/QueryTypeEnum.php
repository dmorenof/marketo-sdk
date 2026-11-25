<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Rest\Asset\V1\Snippet\ById\ContentJson\Post\Query;

enum QueryTypeEnum: string
{
    case DynamicContent = 'DynamicContent';
    case HTML = 'HTML';
    case Text = 'Text';
}
