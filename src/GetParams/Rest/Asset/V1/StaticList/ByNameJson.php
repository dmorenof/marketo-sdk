<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\StaticList;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'name' => 'name',
    ],
    'header' => [],
];

    public string $name;
}
