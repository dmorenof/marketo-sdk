<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Activities;

final class PagingtokenJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sinceDatetime',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'sinceDatetime' => 'sinceDatetime',
        ],
        'header' => [],
    ];

    public string $sinceDatetime;
}
