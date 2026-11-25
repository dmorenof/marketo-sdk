<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class DuplicateJson extends \Dmorenof\SdkRuntime\DTO
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
