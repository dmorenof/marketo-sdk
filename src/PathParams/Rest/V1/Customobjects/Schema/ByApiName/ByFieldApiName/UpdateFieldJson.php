<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\V1\Customobjects\Schema\ByApiName\ByFieldApiName;

final class UpdateFieldJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'apiName',
    'fieldApiName',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'apiName' => 'apiName',
        'fieldApiName' => 'fieldApiName',
    ],
    'query' => [],
    'header' => [],
];

    public string $apiName;
    public string $fieldApiName;
}
