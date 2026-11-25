<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Companies\Schema;

final class FieldsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'batchSize' => 'batchSize',
        'nextPageToken' => 'nextPageToken',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'batchSize' => [
        'format' => 'int32',
    ],
];

    public ?int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    public ?string $nextPageToken;
}
