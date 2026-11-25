<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Snippet\ById\DynamicContent;

final class SegmentIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'segmentId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'segmentId' => 'segmentId',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
        'segmentId' => [
            'format' => 'int32',
        ],
    ];

    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public int $segmentId {
        set {
            $this->assigning('segmentId', $value);
            $this->segmentId = $value;
        }
    }
}
