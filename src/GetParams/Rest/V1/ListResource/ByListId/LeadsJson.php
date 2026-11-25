<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\ListResource\ByListId;

final class LeadsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'batchSize' => 'batchSize',
            'fields' => 'fields',
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
    ];

    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $fields;
    public ?string $nextPageToken;
}
