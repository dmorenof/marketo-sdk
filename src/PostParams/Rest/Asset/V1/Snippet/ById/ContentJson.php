<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V1\Snippet\ById;

final class ContentJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'type',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'content' => 'content',
            'type' => 'type',
        ],
        'header' => [],
    ];

    public string $content;
    public \MarketoSDK\Enums\Rest\Asset\V1\Snippet\ById\ContentJson\Post\Query\QueryTypeEnum $type;
}
