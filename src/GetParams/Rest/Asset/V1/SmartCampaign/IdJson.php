<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign;

final class IdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'includeFlowSteps' => 'includeFlowSteps',
        ],
        'header' => [],
    ];

    public ?bool $includeFlowSteps;
}
