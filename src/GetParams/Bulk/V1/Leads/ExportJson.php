<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Bulk\V1\Leads;

final class ExportJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'batchSize' => 'batchSize',
        'nextPageToken' => 'nextPageToken',
        'status' => 'status',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'batchSize' => [
        'format' => 'int32',
    ],
    'status' => [
        'jsonSchema' => '{"enum":["cancelled","completed","created","failed","processing","queued"]}',
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
    public ?string $nextPageToken;
    /** @var list<string>|null */
    public ?array $status;
}
