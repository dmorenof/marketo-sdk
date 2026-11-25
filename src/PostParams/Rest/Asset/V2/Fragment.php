<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V2;

final class Fragment extends \Dmorenof\SdkRuntime\DTO
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

    public \MarketoSDK\Enums\Rest\Asset\V2\Fragment\Post\Header\AppTypeEnum $xAppType;
    public string $access_token;
    public \MarketoSDK\DTOs\Create\Fragment\Request $body;
}
