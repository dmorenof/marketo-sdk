<?php

declare(strict_types=1);

namespace MarketoSDK\DeleteParams\Rest\V1\Lists\ByListId;

final class LeadsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'body',
    ];
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

    /** @var list<int> */
    public array $id;
    public \MarketoSDK\DTOs\ListOperationRequest $body;
}
