<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Bulk\V1\Leads\Export\ByExportId;

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
