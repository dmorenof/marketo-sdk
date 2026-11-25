<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class FailuresJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apiName',
        'batchId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'apiName' => 'apiName',
            'batchId' => 'batchId',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'batchId' => [
            'format' => 'int32',
        ],
    ];

    public string $apiName;
    public int $batchId {
        set {
            $this->assigning('batchId', $value);
            $this->batchId = $value;
        }
    }
}
