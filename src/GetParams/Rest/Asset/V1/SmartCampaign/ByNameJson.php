<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign;

final class ByNameJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'includeFlowSteps' => 'includeFlowSteps',
        'name' => 'name',
    ],
    'header' => [],
];

    public ?bool $includeFlowSteps;
    public string $name;
}
