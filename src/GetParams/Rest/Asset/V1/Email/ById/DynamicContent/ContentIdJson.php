<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\DynamicContent;

final class ContentIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'status' => 'status',
        ],
        'header' => [],
    ];

    public ?\MarketoSDK\Enums\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson\Get\Query\QueryStatusEnum $status;
}
