<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\SmartCampaign\ById;

final class AutoSuggestJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'optionTypeId',
        'ruleTypeId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'optionTypeId' => 'optionTypeId',
            'primaryAttributeValue' => 'primaryAttributeValue',
            'ruleTypeId' => 'ruleTypeId',
        ],
        'header' => [],
    ];

    public string $optionTypeId;
    public ?string $primaryAttributeValue;
    public string $ruleTypeId;
}
