<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class EnqueueJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiName',
    'exportId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'apiName' => 'apiName',
        'exportId' => 'exportId',
    ],
    'query' => [],
    'header' => [],
];

    public string $apiName;
    public string $exportId;
}
