<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1;

final class ActivitiesJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'activityTypeIds',
    'nextPageToken',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'activityTypeIds' => 'activityTypeIds',
        'assetIds' => 'assetIds',
        'batchSize' => 'batchSize',
        'leadIds' => 'leadIds',
        'listId' => 'listId',
        'nextPageToken' => 'nextPageToken',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'activityTypeIds' => [
        'items' => [
            'type' => 'int',
            'rules' => [
                'format' => 'int32',
            ],
        ],
    ],
    'assetIds' => [
        'items' => [
            'type' => 'int',
            'rules' => [
                'format' => 'int32',
            ],
        ],
    ],
    'batchSize' => [
        'format' => 'int32',
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

    /** @var list<int> */
    public array $activityTypeIds;
    /** @var list<int>|null */
    public ?array $assetIds;
    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
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
