<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Activities\External\Type\ByApiName;

final class DescribeJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'draft' => 'draft',
    ],
    'header' => [],
];

    public ?bool $draft;
}
