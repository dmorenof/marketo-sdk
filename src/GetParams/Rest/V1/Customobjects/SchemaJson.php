<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Customobjects;

final class SchemaJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'names' => 'names',
        'state' => 'state',
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
    public ?\MarketoSDK\Enums\Rest\V1\Customobjects\SchemaJson\Get\Query\QueryStateEnum $state;
}
