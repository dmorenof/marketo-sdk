<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Bulk\V1\Program\ByProgramId\Members;

final class ImportJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'format',
        'programMemberStatus',
        'body',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'format' => 'format',
            'programMemberStatus' => 'programMemberStatus',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public \MarketoSDK\Enums\Bulk\V1\Program\ByProgramId\Members\ImportJson\Post\Query\QueryFormatEnum $format;
    public string $programMemberStatus;
    public \MarketoSDK\Requests\Bulk\V1\Program\ByProgramId\Members\ImportJson\Post $body;
}
