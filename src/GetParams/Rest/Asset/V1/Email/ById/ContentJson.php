<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Email\ById;

final class ContentJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'status' => 'status',
        ],
        'header' => [],
    ];

    public ?\MarketoSDK\Enums\Rest\Asset\V1\Email\ById\ContentJson\Get\Query\QueryStatusEnum $status;
}
