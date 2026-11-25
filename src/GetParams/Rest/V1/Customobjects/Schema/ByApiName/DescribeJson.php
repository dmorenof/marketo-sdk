<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Customobjects\Schema\ByApiName;

final class DescribeJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'state' => 'state',
    ],
    'header' => [],
];

    public ?\MarketoSDK\Enums\Rest\V1\Customobjects\Schema\ByApiName\DescribeJson\Get\Query\QueryStateEnum $state;
}
