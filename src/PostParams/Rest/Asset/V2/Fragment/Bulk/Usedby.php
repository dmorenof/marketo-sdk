<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V2\Fragment\Bulk;

final class Usedby extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'xAppType',
    'access_token',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'access_token' => 'access_token',
    ],
    'header' => [
        'x-app-type' => 'xAppType',
    ],
];

    protected const array PROPERTY_MAP = [
    'x-app-type' => 'xAppType',
];
    protected const array WIRE_PROPERTY_MAP = [
    'xAppType' => 'x-app-type',
];

    public const bool OPERATION_BODY = true;

    public string $xAppType;
    public string $access_token;
    public \MarketoSDK\DTOs\Bulk\UsedBy\Request $body;
}
