<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Bulk\V1\Customobjects\ByApiName;

final class ImportJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'format',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'format' => 'format',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public \MarketoSDK\Enums\Bulk\V1\Customobjects\ByApiName\ImportJson\Post\Query\QueryFormatEnum $format;
    public \MarketoSDK\Requests\Bulk\V1\Customobjects\ByApiName\ImportJson\Post $body;
}
