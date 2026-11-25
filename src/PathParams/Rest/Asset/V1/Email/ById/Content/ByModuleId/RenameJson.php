<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class RenameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'moduleId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'moduleId' => 'moduleId',
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
    public string $moduleId;
}
