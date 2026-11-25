<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Variable;

final class NameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'name' => 'name',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $name;
}
