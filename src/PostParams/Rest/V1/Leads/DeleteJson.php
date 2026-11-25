<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\V1\Leads;

final class DeleteJson extends \Dmorenof\SdkRuntime\DTO
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
            'rules' => [],
        ],
    ],
];

    /** @var list<int>|null */
    public ?array $id;
    public ?\MarketoSDK\DTOs\Delete\Lead\Request $body;
}
