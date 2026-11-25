<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Folder;

final class IdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'type' => 'type',
        ],
        'header' => [],
    ];

    public \MarketoSDK\Enums\Rest\Asset\V1\Folder\IdJson\Get\Query\QueryTypeEnum $type;
}
