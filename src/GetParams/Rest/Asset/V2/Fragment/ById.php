<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V2\Fragment;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'xAppType',
        'access_token',
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

    public \MarketoSDK\Enums\Rest\Asset\V2\Fragment\ById\Get\Header\AppTypeEnum $xAppType;
    public string $access_token;
}
