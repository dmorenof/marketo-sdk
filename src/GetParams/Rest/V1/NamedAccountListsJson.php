<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1;

final class NamedAccountListsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'filterType',
    'filterValues',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'batchSize' => 'batchSize',
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
    public string $filterType;
    /** @var list<string> */
    public array $filterValues;
    public ?string $nextPageToken;
}
