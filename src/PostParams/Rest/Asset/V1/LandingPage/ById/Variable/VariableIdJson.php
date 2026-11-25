<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V1\LandingPage\ById\Variable;

final class VariableIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'value',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'value' => 'value',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'value' => [
        'format' => 'int32',
    ],
];

    public int $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }
}
