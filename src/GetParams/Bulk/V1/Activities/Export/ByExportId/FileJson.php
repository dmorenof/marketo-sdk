<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Bulk\V1\Activities\Export\ByExportId;

final class FileJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [],
    'header' => [
        'Range' => 'Range',
    ],
];

    public ?string $Range;
}
