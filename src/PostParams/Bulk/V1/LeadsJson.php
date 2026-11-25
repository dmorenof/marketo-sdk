<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Bulk\V1;

final class LeadsJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'format',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'format' => 'format',
        'listId' => 'listId',
        'lookupField' => 'lookupField',
        'partitionName' => 'partitionName',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'listId' => [
        'format' => 'int32',
    ],
];

    public \MarketoSDK\Enums\Bulk\V1\LeadsJson\Post\Query\QueryFormatEnum $format;
    public ?int $listId {
        set {
            $this->assigning('listId', $value);
            $this->listId = $value;
        }
    }
    public ?string $lookupField;
    public ?string $partitionName;
    public \MarketoSDK\Requests\Bulk\V1\LeadsJson\Post $body;
}
