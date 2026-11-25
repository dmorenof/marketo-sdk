<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content;

final class HtmlIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'htmlId',
    'id',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'htmlId' => 'htmlId',
        'id' => 'id',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public string $htmlId;
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
}
