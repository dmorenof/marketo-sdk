<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Folder;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'name' => 'name',
            'root' => 'root',
            'type' => 'type',
            'workSpace' => 'workSpace',
        ],
        'header' => [],
    ];

    public string $name;
    public ?string $root;
    public ?string $type;
    public ?string $workSpace;
}
