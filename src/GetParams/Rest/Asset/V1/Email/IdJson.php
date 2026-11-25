<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Email;

final class IdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'status' => 'status',
        ],
        'header' => [],
    ];

    public ?\MarketoSDK\Enums\Rest\Asset\V1\Email\IdJson\Get\Query\QueryStatusEnum $status;
}
