<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\V1\Lead;

final class LeadIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'fields' => 'fields',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'fields' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    /** @var list<string>|null */
    public ?array $fields;
}
