<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Form;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'folder' => 'folder',
            'name' => 'name',
            'status' => 'status',
        ],
        'header' => [],
    ];

    public ?string $folder;
    public string $name;
    public ?\MarketoSDK\Enums\Rest\Asset\V1\Form\ByNameJson\Get\Query\QueryStatusEnum $status;
}
