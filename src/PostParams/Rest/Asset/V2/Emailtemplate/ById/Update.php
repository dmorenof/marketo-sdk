<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\ById;

final class Update extends \Dmorenof\SdkRuntime\DTO
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

    public const bool OPERATION_BODY = true;

    public \MarketoSDK\Enums\Rest\Asset\V2\Emailtemplate\ById\Update\Post\Header\AppTypeEnum $xAppType;
    public string $access_token;
    public ?\MarketoSDK\DTOs\Update\EmailTemplate\Request $body;
}
