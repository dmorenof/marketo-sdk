<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Identity\Oauth;

final class Token extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'client_id',
    'client_secret',
    'grant_type',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'client_id' => 'client_id',
        'client_secret' => 'client_secret',
        'grant_type' => 'grant_type',
    ],
    'header' => [],
];

    public string $client_id;
    public string $client_secret;
    public \MarketoSDK\Enums\Identity\Oauth\Token\Get\Query\GrantTypeEnum $grant_type;
}
