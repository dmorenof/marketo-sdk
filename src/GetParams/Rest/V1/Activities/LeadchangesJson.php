<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Activities;

final class LeadchangesJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fields',
    'nextPageToken',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'batchSize' => 'batchSize',
        'fields' => 'fields',
        'leadIds' => 'leadIds',
        'listId' => 'listId',
        'nextPageToken' => 'nextPageToken',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'batchSize' => [
        'format' => 'int32',
    ],
    'fields' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'leadIds' => [
        'items' => [
            'type' => 'int',
            'rules' => [],
        ],
    ],
    'listId' => [
        'format' => 'int32',
    ],
];

    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    /** @var list<string> */
    public array $fields;
    /** @var list<int>|null */
    public ?array $leadIds;
    public ?int $listId {
        set {
            $this->assigning('listId', $value);
            $this->listId = $value;
        }
    }
    public string $nextPageToken;
}
