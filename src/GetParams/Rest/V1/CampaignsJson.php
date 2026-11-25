<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1;

final class CampaignsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'batchSize' => 'batchSize',
        'id' => 'id',
        'isTriggerable' => 'isTriggerable',
        'name' => 'name',
        'nextPageToken' => 'nextPageToken',
        'programName' => 'programName',
        'workspaceName' => 'workspaceName',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'batchSize' => [
        'format' => 'int32',
    ],
    'id' => [
        'items' => [
            'type' => 'int',
            'rules' => [
                'format' => 'int32',
            ],
        ],
    ],
    'name' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'programName' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'workspaceName' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    /** @var list<int>|null */
    public ?array $id;
    public ?bool $isTriggerable;
    /** @var list<string>|null */
    public ?array $name;
    public ?string $nextPageToken;
    /** @var list<string>|null */
    public ?array $programName;
    /** @var list<string>|null */
    public ?array $workspaceName;
}
