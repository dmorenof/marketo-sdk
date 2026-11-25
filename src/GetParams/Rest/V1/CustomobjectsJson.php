<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1;

final class CustomobjectsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'names' => 'names',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'names' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    /** @var list<string>|null */
    public ?array $names;
}
