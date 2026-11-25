<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\Variable;

final class VariableIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'variableId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'id' => 'id',
        'variableId' => 'variableId',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $variableId;
}
