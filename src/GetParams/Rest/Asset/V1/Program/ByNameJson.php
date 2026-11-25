<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\Program;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'includeCosts' => 'includeCosts',
            'includeTags' => 'includeTags',
            'name' => 'name',
        ],
        'header' => [],
    ];

    public ?bool $includeCosts;
    public ?bool $includeTags;
    public string $name;
}
