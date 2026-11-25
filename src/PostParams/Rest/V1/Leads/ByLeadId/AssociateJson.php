<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\V1\Leads\ByLeadId;

final class AssociateJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'cookie',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'cookie' => 'cookie',
    ],
    'header' => [],
];

    public string $cookie;
}
