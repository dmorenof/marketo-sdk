<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById;

final class SmartListJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'includeRules' => 'includeRules',
    ],
    'header' => [],
];

    public ?bool $includeRules;
}
