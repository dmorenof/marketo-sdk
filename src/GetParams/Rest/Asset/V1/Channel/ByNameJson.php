<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Channel;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Name' => 'Name',
        ],
        'header' => [],
    ];

    public string $Name;
}
