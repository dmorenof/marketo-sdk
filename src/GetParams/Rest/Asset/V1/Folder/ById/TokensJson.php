<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Folder\ById;

final class TokensJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'folderType' => 'folderType',
    ],
    'header' => [],
];

    public ?\MarketoSDK\Enums\Rest\Asset\V1\Folder\ById\TokensJson\Get\Query\FolderTypeEnum $folderType;
}
