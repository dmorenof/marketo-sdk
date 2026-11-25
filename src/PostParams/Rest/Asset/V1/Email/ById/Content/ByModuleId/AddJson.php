<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class AddJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'index',
        'name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'index' => 'index',
            'name' => 'name',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'index' => [
            'format' => 'int32',
        ],
    ];

    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
    public string $name;
}
