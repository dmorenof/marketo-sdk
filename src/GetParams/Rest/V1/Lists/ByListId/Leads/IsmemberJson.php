<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Lists\ByListId\Leads;

final class IsmemberJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'id' => 'id',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'id' => [
        'items' => [
            'type' => 'int',
            'rules' => [
                'format' => 'int32',
            ],
        ],
    ],
];

    /** @var list<int>|null */
    public ?array $id;
    public ?\MarketoSDK\DTOs\ListOperationRequest $body;
}
