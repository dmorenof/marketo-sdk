<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId;

final class RemoveConstraintJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'ruleId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'id' => 'id',
        'ruleId' => 'ruleId',
    ],
    'query' => [],
    'header' => [],
];

    public int $id;
    public int $ruleId;
}
