<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1;

final class SalespersonsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'filterType',
        'filterValues',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'batchSize' => 'batchSize',
            'fields' => 'fields',
            'filterType' => 'filterType',
            'filterValues' => 'filterValues',
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
        'filterValues' => [
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
    /** @var list<string>|null */
    public ?array $fields;
    public string $filterType;
    /** @var list<string> */
    public array $filterValues;
    public ?string $nextPageToken;
}
