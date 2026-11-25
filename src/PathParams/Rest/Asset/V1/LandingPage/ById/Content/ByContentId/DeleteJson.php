<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\LandingPage\ById\Content\ByContentId;

final class DeleteJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentId',
        'id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'contentId' => 'contentId',
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

    public string $contentId;
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
}
